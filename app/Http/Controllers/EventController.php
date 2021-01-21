<?php

namespace App\Http\Controllers;

use App\Event;
use App\Deceased;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $users = \App\User::whereHas("roles", function($q){ $q->where("name", "Field Officer"); })->get();
        $events = Event::all();
           
        $data =  [];
        foreach ($events as $event) {
            $data[] = [
                'id' => $event->id,
                'title' => $event->name,
                'start' => Carbon::parse($event->start)->timestamp,
                'end' => Carbon::parse($event->end)->timestamp,
                'className' => $event->category
            ];
        }

        return view('events.index', ['events' => $data,'Field_Officer'=>$users]);
    }

    public function store(Request $request)
    {
        if( $request->ajax() ) {
            $validator = Validator::make($request->input(), array(
                'name' => 'required',
                'category' => 'required',
                'start' => 'required',
                'end' => 'required',
            ));

            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'messages' => $validator->errors(),
                ], 422);
            }

            $event = Event::create($request->except('_token'));

            return \response()->json([
                'success' => true,
                'id' => $event->id
            ]);
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }

    public function update(Request $request)
    {
        if ( $request->ajax() ) {
            $event = Event::find($request->id);
            $event->update($request->except('_token'));

            return \response()->json([
                'success' => true
            ]);
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }

    public function destroy(Request $request)
    {
        if ( $request->ajax() ) {
            $event = Event::find($request->id);
            $event->delete();

            return \response()->json([
                'success' => true
            ]);
        }

        return \response()->json([
            'error' => true,
            'message' => 'Something went wrong.'
        ]);
    }

    public function list(Request $request)
    {
        $field_officers = $request->input('field_officers','');
        if($field_officers == "")
            $events = Event::all();
        else
        {
            $events = Deceased::where('user_id',$field_officers)->pluck('id');
            $events = Event::whereIn('deceased_id',$events->toArray())->get();
        }

        //$events = Event::all();
        $data =  [];
        foreach ($events as $event) {
            $data[] = [
                'id' => $event->id,
                'title' => $event->name,
                'start' => $event->start,
                'end' => $event->end,
                'className' => $event->category,
                'deceased_id' => $event->deceased_id
            ];
        }

        return \response()->json([
            'success' => true,
            'data' => $data
        ]);

    }
}
