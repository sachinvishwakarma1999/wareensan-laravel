@extends('layouts.app')

@section('content_header')
    <h4 class="title">User Roles</h4>
@endsection
@section('content')
    <div class="user-roles-form">
        {!! Form::open(array('route' => 'user-roles.store','method'=>'POST')) !!}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Users</label>
                    {!! Form::select('user', $users, null, ['class' => 'form-control', 'placeholder' => 'Please select user.', 'id' => 'listUser']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Roles</label>
                    {!! Form::select('role', $roles, null, ['class' => 'form-control', 'placeholder' => 'Please select role.']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mt-4">
                    <button type="submit" name="action" value="add_role" class="btn btn-primary theme_btn">Add Role</button>
                </div>
            </div>
        </div>

        <div class="checkbox-list-part">
            <div class="checkbox-list-box" id="administration-group">
                <h4 class="title">Administration</h4>
                @if( isset($permissions['administration']) && count($permissions['administration']) > 0 )
                    <ul class="checkbox-list">
                        @foreach($permissions['administration'] as $permission)
                            <li>
                                {!! Form::checkbox('permissions[]', $permission['id'], true, ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'administration-' . $permission['id']]) !!}
                                <label for="{{ 'administration-' . $permission['id']  }}">{{$permission['name']}}</label>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="checkbox-list-box" id="schedule-group">
                <h4 class="title">Schedule</h4>
                @if( isset($permissions['schedule']) && count($permissions['schedule']) > 0 )
                    <ul class="checkbox-list">
                        @foreach($permissions['schedule'] as $permission)
                            <li>
                                {!! Form::checkbox('permissions[]', $permission['id'], true, ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'schedule-' . $permission['id']]) !!}
                                <label for="{{'schedule-' . $permission['id']}}">{{$permission['name']}}</label>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="checkbox-list-box" id="exhumantion-group">
                <h4 class="title">Exhumantion</h4>
                @if( isset($permissions['exhumantion']) && count($permissions['exhumantion']) > 0 )
                    <ul class="checkbox-list">
                        @foreach($permissions['exhumantion'] as $permission)
                            <li>
                                {!! Form::checkbox('permissions[]', $permission['id'], true, ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'exhumantion-' . $permission['id']]) !!}
                                <label for="{{'exhumantion-' . $permission['id']}}">{{$permission['name']}}</label>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="checkbox-list-box" id="claimant-group">
                <h4 class="title">Claimant</h4>
                @if( isset($permissions['claimant']) && count($permissions['claimant']) > 0 )
                    <ul class="checkbox-list">
                        @foreach($permissions['claimant'] as $permission)
                            <li>
                                {!! Form::checkbox('permissions[]', $permission['id'], true, ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'claimant-' . $permission['id']]) !!}
                                <label for="{{'claimant-' . $permission['id']}}">{{$permission['name']}}</label>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('footer_script')
    <script type="application/javascript">
        $(function () {
            $('#listUser').change(function () {
                window.location = "{{route('user-roles.index')}}" + '/' + $(this).val();
            })
        })
    </script>
@endsection
