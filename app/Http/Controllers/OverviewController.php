<?php

namespace App\Http\Controllers;

use App\Claimant;
use App\Objector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class OverviewController extends Controller
{
    public function index()
    {
        $number_appointment = Claimant::where('status', Claimant::STATUS_E_APPOINTMENT)->get()->count();
        $number_waiting = Claimant::where('status', Claimant::STATUS_WAITING)->get()->count();
        $number_verified = Claimant::where('status', Claimant::STATUS_VERIFICATION_IN_PROGRESS)->get()->count();
        $number_completed = Claimant::where('status', Claimant::STATUS_COMPLETED)->get()->count();
        $number_walk = Claimant::where('status', Claimant::STATUS_WALK_IN_ENQUIRIES)->get()->count();

        $claimants = Claimant::all()->count();
        $objectors = Objector::all()->count();


        $overview = [
            'claimants' => $claimants,
            'objectors' => $objectors,
            'totals' => $claimants + $objectors
        ];

        //echo "<pre>";
        //print_r($overview);

        return view('overview.index', compact([
            'number_appointment',
            'number_waiting',
            'number_verified',
            'number_completed',
            'number_walk',
            'overview'
        ]));
    }

    public function claimantDatatable(Request $request)
    {
        if ($request->ajax()) {

            $data = DB::table('claimants')
                ->leftJoin('deceaseds', function($join) {
                    $join->on('claimants.id', '=', 'deceaseds.deceasedable_id');
                    $join->where('deceasedable_type', '=', Claimant::class);
                })
                ->select(
                    [
                        'claimants.id',
                        'claimants.passport_no',
                        'claimants.status',
                        'claimants.claimant_name',
                        'deceaseds.name as deceased_name',
                        'deceaseds.dod',
                        'deceaseds.block',
                        'deceaseds.plot'
                    ])
                ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {

                    if (!empty($request->get('search'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (Str::contains(Str::lower($row['claimant_name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            if (Str::contains(Str::lower($row['deceased_name']), Str::lower($request->get('search')))) {
                                return true;
                            }

                            return false;
                        });
                    }

                })
                ->editColumn('dod', function ($row) {
                    return Carbon::parse($row->dod)->format('d-M-Y');
                })
                ->editColumn('status', function ($row) {

                    $list = Claimant::listStatus();

                    return isset($list[$row->status])
                        ? $list[$row->status]
                        : $row->status;
                })
                ->editColumn('id', function ($row){
                    return format_number($row->id, 7);
                })
                ->addColumn('session', function ($row) {
                    return '';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'. route('claimants.edit', $row->id) .'" class="view_btn">View Claim</a>';
                })
                ->make(true);
        }

        return view('overview.index');
    }

    public function addClaimant(Request $request)
    {
        if ($request->ajax()) {

            $validator = Validator::make($request->input(), array(
                'claimant_name' => 'required',
                'passport_no' => 'required',
                'contact_no' => 'required',
                'email' => 'required|unique:claimants,email',
            ));

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'messages' => $validator->errors(),
                ], 422);
            }

            $claimant = Claimant::create($request->except('_token'));

            activity()
                ->causedBy(auth()->user())
                ->performedOn($claimant)
                ->log("Add Claimant {$claimant->claimant_name}");


            return \response()->json([
                'success' => true,
            ]);
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }

}
