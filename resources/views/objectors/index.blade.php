@extends('layouts.app')

@section('content_header')
    <h4 class="title">Objector Registry</h4>
@endsection

@section('content')
    <div class="search-form">
        <label>Search By</label>
        <form method="post">
            <div class="d-flex flex-wrap">
                <div class="form-input search-input-width">
                    <input type="search" name="search" class="form-control" id="tblSearch"
                           placeholder="Search by Objector Name, Objector ID, Deceased Name">
                </div>
                <ul class="btn_part d-flex flex-wrap">
                    <li>
                        <button id="btnSearch" class="btn btn-primary theme_btn" value="Search">Search</button>
                    </li>
                    @can(config('permission.permissions.add_objector'))
                        <li>
                            <a href="{{ route('objectors.create')  }}" class="btn btn-primary theme_btn">Create New
                                Objector</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </form>
    </div>

    <div class="theme-data-table table-responsive">
        <table class="table data-table object_deceased_table">
            <thead>
            <tr>
                <th class="remove-sort">Objector ID</th>
                <th class="remove-sort">Objector Name</th>
                <th class="remove-sort">Gender</th>
                <th class="remove-sort">Contact No.</th>
                <th class="remove-sort">Email Address</th>
                <th class="remove-sort">Address</th>
                <th class="remove-sort">Mail Address</th>
                <th class="remove-sort">Remarks</th>
                <th class="remove-sort"></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
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
                        <h5 class="modal-title" id="exampleModalLabel">Delete Objector</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="resource_id" name="id" type="hidden">
                        <h5 class="text-center">Are you sure you want to delete this objector?</h5>
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
    <script type="application/javascript">
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                searching: false,
                paging: false,
                lengthChange: false,
                autoWidth: false,
                order: [[1, 'desc']],
                ajax: {
                    url: "{{ route('objectors.index') }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'objector_name', name: 'objector_name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'contact_no', name: 'contact_no'},
                    {data: 'email', name: 'email'},
                    {data: 'address', name: 'address'},
                    {data: 'mail_address', name: 'mail_address'},
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

