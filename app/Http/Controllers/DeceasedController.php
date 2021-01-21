<?php

namespace App\Http\Controllers;

use App\Claimant;
use App\Deceased;
use App\Objector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;
use function foo\func;

class DeceasedController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Deceased::query();
            if (!empty($request->get('from')) && !empty($request->get('to'))) {
                $from = date($request->get('from'));
                $to = date($request->get('to'));
                $query->where(function ($query) use($from, $to){
                    $query->whereDate('created_at','>=', $from);
                    $query->whereDate('created_at','<=', $to);
                });
                $query->orWhere(function ($query) use( $from, $to ) {
                    $query->whereDate('dod','>=', $from);
                    $query->whereDate('dod','<=', $to);
                });
            }
//            dd($query->toSql());
            $data = $query->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {

                    if (!empty($request->get('search'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['plague_name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['block']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            return false;
                        });
                    }

                })
                ->editColumn('dod', function ($row) {
                    return Carbon::parse($row->dod)->format('d-M-Y');
                })
                ->editColumn('special_requirement', function ($row) {
                    return "<span class='requirment'>{$row->special_requirement}</span>";
                })
                ->editColumn('status', function ($row) {

                    $list = Deceased::listStatus();

                    return isset($list[$row->status])
                        ? $list[$row->status]
                        : $row->status;
                })
                ->addColumn('claimant', function ($row) {
                    if( $row->claimant ) {
                        $name = 'Phase ' . $row->phase. ":" . " N-1-" . $row->block . "-" . $row->plot;
                        return "<a href='".route('claimants.edit', $row->claimant->id)."'>".$name."</a>";
                    }
                    return (isset($row->claimant) && $row->claimant) ? $row->claimant->claimant_name :'Unclaimed';
                })
                ->addColumn('action', function ($row) {
                    if(auth()->user()->can(config('permission.permissions.edit_deceased_record'))) {
                        return '<a class="btn btn-primary mr-2" href="' . route("deceaseds.edit",
                                $row->id) . '">Edit</a>';
                    }

                    return '';
                })
                ->rawColumns(['action', 'special_requirement', 'claimant'])
                ->make(true);
        }

        return view('deceaseds.index');
    }
    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function removeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        $file = $request->get('file_name');

        if( isset($file) && $file ) {

            $filePath = $path . '/' . $file;

            if (file_exists($filePath)) {
                unlink($filePath);

                return response()->json([
                    'success' => true,
                ], 200);
            }
        }

        return response()->json([
            'success' => false
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deceased  $deceased
     * @return \Illuminate\Http\Response
     */
    public function edit(Deceased $deceased)
    {
        $activities = Activity::where(['subject_type' => Deceased::class, 'subject_id' => $deceased->id])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('deceaseds.edit',compact(['deceased', 'activities']));
    }
public function actionedit( Request $request)
{
    Deceased::where('id',$request->input('id'))->update(
        array(
            'name' => $request->input('name'),
            'block' => $request->input('block'),
            'plot' => $request->input('plot'),
          'dod' => $request->input('burialdate'),

          'plot' => $request->input('plot'),
          'sub_plot' => $request->input('sub_plot'),
          'special_requirement' => $request->input('special_requirement'),
          'plague_name' => $request->input('plague_name')
        )
      );
      Session::flash('message', 'Deceased Updated Successfully!');
      return redirect()->back();
die;
}
    public function addReason( Request $request, $id )
    {
        if(isset($request->reason) && $request->reason) {
            $deceased = Deceased::find($id);

            activity()
                ->causedBy(auth()->user())
                ->performedOn($deceased)
                ->withProperties(['reason' => $request->reason])
                ->log("Edit Deceased {$deceased->name}");

            return redirect()->route('deceaseds.edit', $id)
                ->with('success', 'Add reason successfully.');
        }

        return redirect()->route('deceaseds.edit', $id)
            ->with('success', 'The reason is empty.');
    }
}
