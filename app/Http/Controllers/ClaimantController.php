<?php

namespace App\Http\Controllers;

use App\Claimant;
use App\Deceased;
use App\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;


class ClaimantController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:' . implode('|', [
                config('permission.permissions.edit_claimant_record'),
                config('permission.permissions.edit_claimant_detail'),
            ]), [
            'only' => ['index', 'edit', 'update']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $claimants = Claimant::all();

//        return view('claimants.index', compact( 'claimants' ));
        if ($request->ajax()) {

            $data = Claimant::latest()->get();

            return DataTables::of($data)
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
                ->editColumn('contact_no', function ($data) {
                    return "+".$data->country_code." - ".$data->contact_no;
                })
                ->addColumn('action', function ($row) {
                    $btn_edit = '';
                    if (auth()->user()->can(config('permission.permissions.edit_claimant_record'))) {
                        $btn_edit = '<a class="btn btn-primary mr-2" href="' . route("claimants.edit",
                                $row->id) . '"><i class="fa fa-pencil"></i></a>';
                    }
                    $btn_remove = '';
                    if (auth()->user()->can(config('permission.permissions.delete_claimant_record'))) {
                        $btn_remove = '<button class="btn btn-danger delete" data-toggle="modal" data-url="' . route('claimants.destroy',
                                $row->id) . '" data-id="' . $row->id . '" data-target="#deleteModal"><i class="fa fa-trash"></i></button>';
                    }

                    return $btn_edit . $btn_remove;
                })
                ->make(true);
        }

        return view('claimants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Claimant::listStatus();

        $country = Country::all();
        return view('claimants.create', compact('status','country'));
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
            'claimant_name' => 'required',
            'passport_no' => 'required',
            'contact_no' => 'required',
            'postal_code' => 'required',
            'block' => 'required',
            'street' => 'required',
            'email' => 'required|unique:claimants,email',
        ]);

        $claimant = Claimant::create($request->except('_token'));

        activity()
            ->causedBy(auth()->user())
            ->performedOn($claimant)
            ->log("Add Claimant {$claimant->claimant_name}");

        return redirect()->route('claimants.index')
            ->with('success', 'Claimant created successfully.');
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
     * @param \App\Claimant $claimant
     * @return \Illuminate\Http\Response
     */
    public function edit(Claimant $claimant)
    {
        $list_deceased = $claimant->deceaseds();

        $activities = Activity::where(['subject_type' => Claimant::class, 'subject_id' => $claimant->id])
            ->orderBy('created_at', 'desc')
            ->get();
        $country = Country::all();

        return view('claimants.edit', compact(['claimant', 'list_deceased', 'activities', 'country']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Claimant $claimant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claimant $claimant)
    {
        $request->validate([
            'claimant_name' => 'required',
            'passport_no' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
        ]);

        $claimant->update($request->except(['_token', '_method']));

        activity()
            ->causedBy(auth()->user())
            ->performedOn($claimant)
            ->log("Edit Claimant {$claimant->claimant_name}");

        return redirect()->route('claimants.index')
            ->with('success', 'Claimant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Claimant $claimant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claimant $claimant)
    {
        $claimant->delete();

        activity()
            ->causedBy(auth()->user())
            ->performedOn($claimant)
            ->log("Delete Claimant {$claimant->claimant_name}");

        return redirect()->route('claimants.index')
            ->with('success', 'Claimant deleted successfully');
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

            $plot = Deceased::where('plot', '=', $request->plot)->get();

            if (!$plot->isEmpty()) {
                return response()->json([
                    'error' => true,
                    'messages' => ['This plot has already exist.'],
                ], 422);
            }

            $claimant = Claimant::find($request->claimant);

            if ($claimant) {
                $deceased = $claimant->deceaseds()->create([
                    'plague_name' => $request->plague_name,
                    'name' => $request->name,
                    'gender' => $request->gender,
                    'grave_type' => $request->grave_type,
                    'status' => $request->status,
                    'relation' => $request->relation,
                    'phase' => $request->phase,
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
                    ->performedOn($claimant)
                    ->log("Add Deceased to Claimant Registry under {$claimant->claimant_name}");

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

            $query = Claimant::find($id)->deceaseds();

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
                    return '<a class="btn btn-primary theme_btn print_btn" href="' . route("claimants.edit",
                            $row->id) . '">Print QR label</a>';
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') LIKE ?", ["%$keyword%"]);
                })
                ->rawColumns(['action', 'special_requirement'])
                ->make(true);
        }
    }

    public function addPayment(Request $request, $id)
    {
        if ($request->ajax()) {

            if (isset($request->items) && count($request->items) > 0) {

                $user = auth()->user();
                $claimant = Claimant::find($id);

                if ($claimant) {
                    $items = $request->items;
                    $sub_total = $total = $tax = 0;

                    if (sizeof($items) > 0) {
                        foreach ($items as $item) {
                            $sub_total += $item['price'];
                        }
                    }

                    $tax = $sub_total * 0.07;
                    $total = $sub_total + $tax;
                    $payment = $claimant->payments()->create([
                        'payment_mode' => $request->payment_mode,
                        'sub_total' => number_format($sub_total, 2),
                        'total' => number_format($total, 2),
                        'tax' => number_format($tax, 2),
                        'remark' => $request->remark,
                        'created_by' => $user->id,

                    ]);

                    activity()
                        ->causedBy(auth()->user())
                        ->performedOn($claimant)
                        ->log("Add Payment to Claimant Registry under {$claimant->claimant_name}");

                    if ($payment) {
                        foreach ($items as $item) {
                            $item_data = [
                                'deceased_id' => $item['id'],
                                'price' => $item['price'],
                            ];

                            $payment->items()->create($item_data);
                        }
                    }

                    return \response()->json([
                        'success' => true
                    ]);
                }
            }

            return \response()->json([
                'error' => true,
                'messages' => ['The payment don\'t have items']
            ], 422);
        }

        return \response()->json([
            'error' => true,
            'messages' => ['Something went wrong.']
        ], 422);
    }

    public function paymentDatatable(Request $request, $id)
    {

        if ($request->ajax()) {

            $query = Claimant::find($id)->payments();

            return DataTables::of($query)
                ->addIndexColumn()
                ->editColumn('id', function ($row) {
                    return '#' . format_number($row->id, 7);
                })
                ->editColumn('created_by', function ($row) {
                    return $row->user->name;
                })
                ->editColumn('created_at', function ($row) {
                    return [
                        'display' => e($row->created_at->format('d-M-Y')),
                        'timestamp' => $row->created_at->timestamp
                    ];
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-primary theme_btn print_btn print_invoice_btn" href="" data-toggle="modal" data-target="#printBtn">Print Invoice</a>';
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(created_at,'%m/%d/%Y') LIKE ?", ["%$keyword%"]);
                })
                ->rawColumns(['action', 'special_requirement'])
                ->make(true);
        }
    }

    public function addPostcode(Request $request){

        $id = $request->input('id');
        //return $id;
        $string = 'https://maps.googleapis.com/maps/api/geocode/json?components=postal_code:'.$id.'&key=AIzaSyBT127pXDxsaFzKaG7zNFK8NXQGesUobJA';
        $content =  file_get_contents($string);

        //$result  = json_decode($string);

        return $content;

    }
}
