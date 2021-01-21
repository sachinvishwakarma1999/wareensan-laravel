@extends('layouts.app')

@section('content_header')
    <h4 class="title">Role Management</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.create') }}"> Create New Role</a>
            </div>
        </div>
    </div>

    <div class="theme-data-table table-responsive">
        <table class="table table-bordered data-table dataTable no-footer">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        <button class="btn btn-danger delete" data-toggle="modal"
                                data-url="{{route('roles.destroy', $role->id)}}" data-id="{{$role->id}}"
                                data-target="#deleteModal">Delete
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('roles.patials.modals.confirm')
@endsection

@section('footer_script')
    <script type="application/javascript">
        $(document).on('click', '.delete', function () {
            let id = $(this).attr('data-id');
            let url = $(this).attr('data-url');
            $('#resource_id').val(id);
            $('#formConfirmDelete').attr('action', url);
        });
    </script>
@endsection
