@extends('layouts.app')

@section('content_header')
    <h4 class="title">Edit Deceased</h4>
@endsection

@section('content')
    <div class="claimant-section">
        <div class="claimant-head">
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <div>
                    <h4 class="title">Ziana Zain Bte Mat Kesom</h4>
                    <ul class="d-flex flex-wrap">
                        <li>
                            <p class="subtitle">Status: <span>Claimed</span></p>
                        </li>
                        <li>
                            <p class="subtitle">Special Requirement: <span class="status">{{$deceased->special_requirement}}</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="claimant-content">
            <div class="tabs-part">
                <ul class="nav nav-tabs nav-bordered customtab">
                    <li class="nav-item">
                        <a href="#deceased-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-none d-lg-block">Deceased Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-none d-lg-block">Activity Log</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="deceased-details">
                        @include('deceaseds.partials.tabs.detail', ['deceased' => $deceased])
                    </div>

                    <div class="tab-pane" id="activity-log">
                        @include('deceaseds.partials.tabs.activity', ['activities' => $activities])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        $(function () {
            $("#confirmModal").modal('show');
        })
    </script>
@endsection
