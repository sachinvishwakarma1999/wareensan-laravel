<div class="activity_tabs_content">
    <div class="activity-table">
        <table class="table">
            <thead>
            <tr>
                <td>Date</td>
                <td>Staff Name</td>
                <td>Action</td>
                <td>Reason</td>
            </tr>
            </thead>
            <tbody>
            @if( isset($activities) && count($activities) > 0)
                @foreach( $activities as $activity )
                    <tr>
                        <td>{{\Carbon\Carbon::parse($activity->created_at)->format('d-M-Y g:i A')}}</td>
                        <td>{{$activity->causer->name}}</td>
                        <td class="font-weight-semibold">{{$activity->description}}</td>
                        <td>{{$activity->getExtraProperty('reason')}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
