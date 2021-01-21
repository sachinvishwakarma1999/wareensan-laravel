<?php

namespace App\Http\Controllers;

use App\Claimant;
use App\Deceased;
use App\MailAddress;
use App\Objector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;

class ObjectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:' . implode('|', [
                config('permission.permissions.edit_objector_record'),
            ]), [
            'only' => ['edit', 'update']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Objector::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {

                    if (!empty($request->get('search'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (Str::contains(Str::lower($row['objector_name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['id']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            return false;
                        });
                    }

                })
                ->editColumn('id', function ($row) {
                   return format_number($row->id, 7, '0');
                })
                ->addColumn('address', function ($row) {
                    return $row->full_address;
                })
                ->addColumn('mail_address', function ($row) {
                    return $row->mail_address->mail_address_full;
                })
                ->addColumn('action', function ($row) {
                    $btn_edit = '';
                    if(auth()->user()->can(config('permission.permissions.edit_objector_record'))) {
                        $btn_edit = '<a class="btn btn-primary mr-2" href="' . route("objectors.edit",
                                $row->id) . '">Edit</a>';
                    }
                    $btn_remove = '';
                    if(auth()->user()->can(config('permission.permissions.delete_objector_record'))) {
                        $btn_remove = '<button class="btn btn-danger delete" data-toggle="modal" data-url="' . route('objectors.destroy',
                                $row->id) . '" data-id="' . $row->id . '" data-target="#deleteModal">Delete</button>';
                    }

                    return $btn_edit . $btn_remove;
                })
                ->make(true);
        }

        return view('objectors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('objectors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'objector_name' => 'required',
            'passport_no' => 'required',
            'contact_no' => 'required',
            'email' => 'required|unique:claimants,email',
        ]);

        $objector = Objector::create($request->except('_token'));

        if ($objector) {
            $mail_address = $request->get('mail_address');

            if (isset($mail_address) && count($mail_address) > 0) {
                $mail_address = MailAddress::create($mail_address);

                if ($mail_address) {
                    $objector->mail_addresses_id = $mail_address->id;
                    $objector->save();
                }
            }
        }

        return redirect()->route('objectors.index')
            ->with('success', 'Objector created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objector  $objector
     * @return \Illuminate\Http\Response
     */
    public function edit(Objector $objector)
    {
        $activities = Activity::where(['subject_type' => Objector::class, 'subject_id' => $objector->id])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('objectors.edit',compact(['objector', 'activities']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Objector $objector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objector $objector)
    {
        $request->validate([
            'objector_name' => 'required',
            'passport_no' => 'required',
            'contact_no' => 'required',
            'email' => 'required|unique:claimants,email',
        ]);

        $objector->update($request->except('_token'));

        $mail_address = $request->get('mail_address');

        if (isset($mail_address) && count($mail_address) > 0) {
            $objector->mail_address()->update($mail_address);
        }

        activity()
            ->causedBy(auth()->user())
            ->performedOn($objector)
            ->log("Edit Objector {$objector->objector_name}");

        return redirect()->route('objectors.index')
            ->with('success', 'Objector updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Objector $objector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objector $objector)
    {
        $objector->delete();

        return redirect()->route('objectors.index')
            ->with('success', 'Objector deleted successfully');
    }

    public function addDeceased(Request $request)
    {
        if ($request->ajax()) {

            $validator = Validator::make($request->input(), array(
                'name' => 'required',
                'plague_name' => 'required',
                'dod' => 'required'
            ));

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'messages' => $validator->errors(),
                ], 422);
            }

            $objector = Objector::find($request->objector);

            if ($objector) {
                $deceased = $objector->deceaseds()->create([
                    'plague_name' => $request->plague_name,
                    'name' => $request->name,
                    'gender' => $request->gender,
                    'grave_type' => $request->grave_type,
                    'status' => $request->status,
                    'relation' => $request->relation,
                    'block' => $request->block,
                    'plot' => $request->plot,
                    'sub_plot' => $request->sub_plot,
                    'special_requirement' => $request->special_requirement,
                    'dod' => date('Y-m-d H:i:s', strtotime($request->dod)),
                    'reason' => $request->reason
                ]);

                foreach ($request->input('document', []) as $file) {
                    $deceased->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
                }

                activity()
                    ->causedBy(auth()->user())
                    ->performedOn($objector)
                    ->log("Add Deceased to Objector Registry under {$objector->name}");

                return \response()->json([
                    'success' => true
                ]);
            }

            return \response()->json([
                'error' => true,
                'message' => 'Something went wrong.'
            ]);
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }

    public function deceased(Request $request, $id)
    {
        if ($request->ajax()) {

            $query = Objector::find($id)->deceaseds();

            return DataTables::of($query)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {

                    if (!empty($request->get('search'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (Str::contains(Str::lower($row['claimant_name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['id']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
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
                ->editColumn('created_at', function ($row) {
                    return [
                        'display' => e($row->created_at->format('d-M-Y')),
                        'timestamp' => $row->created_at->timestamp
                    ];
//                    return Carbon::parse($row->created_at)->format('d-M-Y');
                })
                ->editColumn('status', function ($row) {

                    $list = Deceased::listStatus();

                    return isset($list[$row->status])
                        ? $list[$row->status]
                        : $row->status;
                })
                ->addColumn('action', function ($row) {
                    return '<a class="delete" href="javacript:void(0)" data-toggle="modal" data-url="' . route('objectors.destroy.deceased') . '" data-id="' . $row->id . '" data-target="#deleteModal" class="view_btn">Delete Deceased</a>';
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') LIKE ?", ["%$keyword%"]);
                })
                ->rawColumns(['action', 'special_requirement'])
                ->make(true);
        }
    }

    public function destroyDeceased(Request $request)
    {
        if($request->ajax()) {
            $deceased = Deceased::find($request->deceased_id);
            $objector = Objector::find($request->objector_id);

            if ($deceased && $objector) {

                $deceased->delete();

                activity()
                    ->causedBy(auth()->user())
                    ->performedOn($objector)
                    ->log("Delete Deceased in Objector Registry under {$objector->objector_name}");

                return \response()->json([
                    'success' => true
                ]);
            }
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }
}
