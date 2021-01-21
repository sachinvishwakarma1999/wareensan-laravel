@extends('layouts.app')

@section('content_header')
    <h4 class="title">Edit Role</h4>
@endsection
@section('content')
    <div class="user-roles-form">
        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    {!! Form::text('name', $role->name, ['class' => 'form-control', 'placeholder' => 'Role Name.']) !!}
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
                                {!! Form::checkbox('permissions[]', $permission['id'], in_array($permission['id'], $rolePermissions), ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'administration-' . $permission['id']]) !!}
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
                                {!! Form::checkbox('permissions[]', $permission['id'], in_array($permission['id'], $rolePermissions), ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'schedule-' . $permission['id']]) !!}
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
                                {!! Form::checkbox('permissions[]', $permission['id'], in_array($permission['id'], $rolePermissions), ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'exhumantion-' . $permission['id']]) !!}
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
                                {!! Form::checkbox('permissions[]', $permission['id'], in_array($permission['id'], $rolePermissions), ['class' => 'material-inputs filled-in chk-col-transparent', 'id' => 'claimant-' . $permission['id']]) !!}
                                <label for="{{'claimant-' . $permission['id']}}">{{$permission['name']}}</label>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <ul class="form_btn_part d-flex flex-wrap">
            <li>
                <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Save Changes">
            </li>
        </ul>
        {!! Form::close() !!}
    </div>
@endsection
