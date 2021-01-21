@extends('layouts.app')

@section('content_header')
    <h4 class="title">Calendar</h4>
@endsection
@section('content')
    <div class="callendar-box">
    	<div class="dropdown">
            <form action="{{route('events.index')}}" method="get" id="calender-form">
                <select name="field_officers" onchange="getCalender()" id="field_officers">
                    <option value="">Select Officers</option>
                    @foreach($Field_Officer as $user)
                    <option @if(isset($_GET['field_officers']) && $_GET['field_officers'] == $user->id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div id="calendar"></div>
    </div>

    @include('events.partials.modals.event')
@endsection
@section('footer_script')
    <script>
        var eventUrl = "{{route('events.list')}}"+"?field_officers="+document.getElementById('field_officers').value;

        function getCalender()
        {
            $('#calender-form').submit()
        }
    </script>
@endsection
