@extends('layouts.app')

@section('content_header')
    <h4 class="title">Claimant Registry</h4>
@endsection
@section('content')
    <div class="search-form">
        <label>Search By</label>
        <form method="post">
            <div class="d-flex flex-wrap">
                <div class="form-input search-input-width">
                    <input type="search" name="search" class="form-control" id="tblSearch"
                           placeholder="Search by Claimant Name, Claimant ID, Deceased Name, Block No, Plot Number">
                </div>
                <ul class="btn_part d-flex flex-wrap">
                    <li>
                        <button id="btnSearch" class="btn btn-primary theme_btn" value="Search">Search</button>
                    </li>
                    @can(config('permission.permissions.add_claimant'))
                        <li>
                            <a href="{{ route('claimants.create')  }}" class="btn btn-primary theme_btn">Create New
                                Claim</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </form>
    </div>

    <div class="theme-data-table table-responsive">
        <table class="table data-table">
            <thead>
            <tr>
                <th class="remove-sort">Claimant ID</th>
                <th class="remove-sort">Claimant Name</th>
                <th class="remove-sort">Gender</th>
                <th class="remove-sort">Contact No.</th>
                <th class="remove-sort">Email Address</th>
                <th class="remove-sort">Residential Address</th>
                <th class="remove-sort">Street</th>
                <th class="remove-sort">Remarks</th>
                <th class="remove-sort">Actions</th>
            </tr>
            </thead>
            <!-- <tbody>
                {{--@foreach( $claimants as $claimant )--}}
                {{--<tr>--}}
                {{--<td>{{ $claimant->id }}</td>--}}
                {{--<td>{{ $claimant->claimant_name }}</td>--}}
                {{--<td>M</td>--}}
                {{--<td>{{ $claimant->contact_no }}</td>--}}
                {{--<td>{{ $claimant->email }}</td>--}}
                {{--<td>{{ $claimant->residential }}</td>--}}
                {{--<td>{{ $claimant->street }}</td>--}}
                {{--<td>{{ $claimant->remark }}</td>--}}
                {{--<td><a class="btn btn-primary" href="{{ route('claimants.edit',$claimant->id) }}"><i class="fa fa-pencil"></i></a></td>--}}
                {{--<td>--}}
                {{--<button class="btn btn-danger delete" data-toggle="modal" data-url="{{ route('claimants.destroy', $claimant->id)  }}" data-id="{{$claimant->id}}" data-target="#deleteModal">Delete</button>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
            </tbody> -->
        </table>
    </div>

    <!-- Delete Warning Modal -->
    <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
         aria-hidden="true">
        <form action="" method="post" id="formConfirmDelete">
            @csrf
            @method('DELETE')
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Claimant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="resource_id" name="id" type="hidden">
                        <h5 class="text-center">Are you sure you want to delete this claimant?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Delete Modal -->

@endsection

@section('footer_script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="application/javascript">
        $(function () {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                searching: false,
                lengthChange: false,
                order: [[1, 'desc']],
                ajax: {
                    url: "{{ route('claimants.index') }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'claimant_name', name: 'claimant_name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'contact_no', name: 'contact_no'},
                    {data: 'email', name: 'email'},
                    {data: 'residential', name: 'residential'},
                    {data: 'street', name: 'street'},
                    {data: 'remark', name: 'remark'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $("#btnSearch").click(function( e ){
                e.preventDefault();
                table.draw();
            });

        });

        $(document).on('click','.delete',function(){
            let id = $(this).attr('data-id');
            let url = $(this).attr('data-url');
            $('#resource_id').val(id);
            $('#formConfirmDelete').attr('action', url);
        });
    </script>
@endsection

