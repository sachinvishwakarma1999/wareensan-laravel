<?php

namespace App\Http\Controllers;

use App\Deceased;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExhumationController extends Controller
{
    public function index()
    {
        $template = DB::table('template')->get();

        return view('exhumations.index',['template' => $template]);
    }
     public function block_map()
    {
        $template = DB::table('template')->get();

        $blk = DB::table('block_map')->get();

        return view('exhumations.blk-9',['template' => $template, 'blk' => $blk]);
    }
     public function nSectionOne_map()
    {
        $template = DB::table('template')->get();

        return view('exhumations.n-1-13-ection-1',['template' => $template]);
    }
     public function nSectionTwo_map()
    {
        $template = DB::table('template')->get();

        return view('exhumations.n-1-13-ection-2',['template' => $template]);
    }
    public function nSectionThree_map()
    {
        $template = DB::table('template')->get();

        return view('exhumations.n-1-13-ection-3',['template' => $template]);
    }

    public function getData()
    {
        $deceased = Deceased::where('plot', '>', 0)->get();
        $data = [];

        if (count($deceased) > 0) {
            foreach ($deceased as $decease) {
                $data[$decease->plot] = [
                    'id' => $decease->id,
                    'name' => $decease->name,
                    'block' => $decease->block,
                    'plot' => $decease->plot,
                    'phase' => $decease->phase,
                    'phase_name' => $this->getPhaseName($decease->phase)
                ];
            }
        }

        return response()->json([
            'data' => $data
        ]);
    }

    public function addSchedule(Request $request)
    {
        if ($request->ajax()) {

            $validator = Validator::make($request->input(), array(
                'date' => 'required',
                'deceased_ids' => 'required'
            ));

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'messages' => $validator->errors(),
                ], 422);
            }
            if (isset($request->deceased_ids) && $request->deceased_ids) {
                $deceased_ids = json_decode($request->deceased_ids);

                if (is_array($deceased_ids) && count($deceased_ids) > 0) {
                    foreach ($deceased_ids as $deceased_id) {

                        $deceased = Deceased::find($deceased_id);

                        if ($request->time) {
                            $time = sprintf("%s:00", $request->time);
                        } else {
                            $time = sprintf("00:00:00");
                        }

                        $date = sprintf("%s %s", $request->date, $time);

                        if ($deceased) {
                            $data = [
                                'name' => $deceased->name,
                                'start' => $date,
                                'end' => $date,
                                'category' => 'bg-primary',
                                'deceased_id' => $deceased->id
                            ];

                            Event::create($data);
                        }
                    }
                }
            }


            return \response()->json([
                'success' => true
            ]);

        }
    }

    public function search(Request $request)
    {
        $condition = [];
        $deceased = DB::table('deceaseds')
            ->leftjoin('events', 'deceaseds.id', '=', 'events.deceased_id');

        $searchQuery = isset($request->keysearch) && $request->keysearch ? $request->keysearch : '';

        if ($searchQuery) {
            $deceased->where(function ($query) use ($searchQuery) {
                $query->where('deceaseds.name', 'LIKE', '%' . $searchQuery . '%');
                $query->orWhere('deceaseds.plot', '=', $searchQuery);
                $query->orWhere('deceaseds.block', '=', $searchQuery);
            });
            $condition[] = 'name';
        }

        if (isset($request->phase) && $request->phase) {
            $deceased->where('deceaseds.phase', '=', $request->phase);
            $condition[] = 'phase';
        }

        if (isset($request->schedule) && ($request->schedule == 1)) {
            if (isset($request->start) && $request->start) {
                $deceased->whereDate('events.start', '<=', $request->start);
                $condition[] = 'start';
            }

            if (isset($request->end) && $request->end) {
                $deceased->whereDate('events.end', '>=', $request->end);
                $condition[] = 'end';
            }
        }

        if (count($condition) > 0) {
            $deceased->select('deceaseds.plot');
            $plots = $deceased->pluck('plot');

            if (count($plots) > 0) {
                return response()->json([
                    'success' => true,
                    'data' => $plots
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'data' => [],
        ], 200);
    }

    public function getPhaseName($id)
    {
        $phase = [
            0 => 'Unclaimed',
            1 => 'Phase 2',
            2 => 'Phase 4',
            3 => 'Phase 6'
        ];

        return isset($phase[$id]) && $phase[$id] ? $phase[$id] : '';
    }
}
