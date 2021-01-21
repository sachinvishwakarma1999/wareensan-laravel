@extends('layouts.app')

@section('content_header')
    <h4 class="title">Permission Denied</h4>
@endsection
@section('content')
    <div class="error-permission">
        {{ $error }}
    </div>
@endsection
