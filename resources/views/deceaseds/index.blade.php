@extends('layouts.app')

@section('content_header')
    <h4 class="title">Deceased Registry</h4>
@endsection
@section('content')
    <div class="search-form">
        <form method="post">
            <div class="d-flex flex-wrap align-item-center">
                <div class="form-input search-input-width w-80">
                    <div class="row">
                        <div class="col col-lg-6">Search By</div>
                        <div class="col col-lg-3">From</div>
                        <div class="col col-lg-3">To</div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-6">
                            <input type="search" name="search" class="form-control" id="tblSearch"
                                   placeholder="Search by Deceased Name, Name On Plaque, Block">
                        </div>
                        <div class="col-lg-3">
                            <input type="date" name="start" class="form-control input-date" id="startDate">
                        </div>
                        <div class="col-lg-3">
                            <input type="date" name="end" class="form-control input-date" id="endDate">
                        </div>
                    </div>
                </div>
                <ul class="btn_part d-flex flex-wrap">
                    <li>
                        <button id="btnSearch" class="btn btn-primary theme_btn" value="Search">Search</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <div class="theme-data-table table-responsive">
        <table class="table data-table deceased_registry_table">
            <thead>
            <tr>
                <th class="remove-sort">Deceased Name</th>
                <th class="remove-sort">Name On Plaque</th>
                <th class="remove-sort">Gender</th>
                <th class="remove-sort">Date Of Death</th>
                <th class="remove-sort">Block</th>
                <th class="remove-sort">Plot</th>
                <th class="remove-sort">Sub Plot</th>
                <th class="remove-sort">Grave Type</th>
                <th class="remove-sort">Status</th>
                <th class="remove-sort">Attention</th>
                <th class="remove-sort">Claimant ID</th>
                <th class="remove-sort">Actions</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <!-- Delete Warning Modal -->
{{--    <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"--}}
{{--         aria-hidden="true">--}}
{{--        <form action="" method="post" id="formConfirmDelete">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">Delete Claimant</h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <input id="resource_id" name="id" type="hidden">--}}
{{--                        <h5 class="text-center">Are you sure you want to delete this claimant?</h5>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
{{--                        <button type="submit" class="btn btn-danger">Yes</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
    <!-- End Delete Modal -->

@endsection

@section('footer_script')
    <script type="application/javascript">
        $(function () {

            var table = $('.deceased_registry_table').DataTable({
                //processing: true,
                serverSide: true,
                info: false,
                searching: false,
                lengthChange: false,
                paging: false,
                order: [[0, 'asc']],
                ajax: {
                    url: "{{ route('deceaseds.index') }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val();
                        d.from = $('#startDate').val();
                        d.to = $('#endDate').val();
                    }
                },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'plague_name', name: 'plague_name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'dod', name: 'dod'},
                    {data: 'block', name: 'block'},
                    {data: 'plot', name: 'plot'},
                    {data: 'sub_plot', name: 'sub_plot'},
                    {data: 'grave_type', name: 'grave_type'},
                    {data: 'status', name: 'status'},
                    {data: 'special_requirement', name: 'special_requirement'},
                    {data: 'claimant', name: 'claimant'},
                    {data: 'action', name: 'action'},
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

