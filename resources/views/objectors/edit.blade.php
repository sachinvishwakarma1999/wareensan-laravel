@extends('layouts.app')

@section('content_header')
    <h4 class="title">Edit Objector</h4>
@endsection
@section('content')
    <div class="claimant-section">
        <div class="claimant-head">
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <div>
                    <h4 class="title">{{ $objector->objector_name }}</h4>
                    <p class="subtitle">Status: <span></span></p>
                </div>

                <a href="#" class="btn btn-primary waiting_btn">Waiting</a>
            </div>
        </div>

        <div class="claimant-content">
            <div class="tabs-part">
                <ul class="nav nav-tabs nav-bordered customtab">
                    <li class="nav-item">
                        <a href="#objector-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-none d-lg-block">Objector Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#object-deceased" data-toggle="tab" aria-expanded="true"
                           class="nav-link">
                            <span class="d-none d-lg-block">Object Deceased</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-none d-lg-block">Activity Log</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="objector-details">
                        @include('objectors.partials.tabs.detail', ['objector' => $objector])
                    </div>

                    <div class="tab-pane" id="object-deceased">
                        @include('objectors.partials.tabs.deceased', ['id' => $objector->id])
                    </div>

                    <div class="tab-pane" id="activity-log">
                        @include('objectors.partials.tabs.activity')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script type="application/javascript">
        $(function () {

            var tableDeceased = $('.object_deceased_table2').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                searching: false,
                lengthChange: false,
                paging: false,
                order: [[0, 'desc']],
                ajax: {
                    url: "{{ route('objectors.deceased', ['id' => $objector->id]) }}",
                    data: function (d) {
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {
                        data: 'created_at',
                        type: 'num',
                        render: {
                            _: 'display',
                            sort: 'timestamp'
                        }
                    },
                    {data: 'name', name: 'name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'dod', name: 'dod'},
                    {data: 'block', name: 'block'},
                    {data: 'plot', name: 'plot'},
                    {data: 'grave_type', name: 'grave_type'},
                    {data: 'special_requirement', name: 'special_requirement'},
                    {data: 'reason', name: 'reason'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#addBtnForm').click(function (e) {
                let msgError = $('#msgError');
                let btnAddForm = $('#addBtnForm');

                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                btnAddForm.html(' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\n' +
                    'Saving...');

                $.ajax({
                    url: "{{ route('objectors.add.deceased') }}",
                    method: 'post',
                    data: $('#addDeceasedForm').serialize(),
                    success: function (data) {
                        $('#deceasedDetailsModal').modal('toggle');
                        btnAddForm.html('Save Changes');
                        tableDeceased.ajax.reload();
                    },
                    error: function (data) {
                        msgError.html('');

                        let errors = $.parseJSON(data.responseText);
                        let errHtml = '<div class="alert alert-danger"><ul>';

                        $.each(errors.messages, function (key, value) {
                            errHtml += '<li>' + value + '</li>';
                        });
                        errHtml += '</ul></div>';
                        msgError.html(errHtml);

                        btnAddForm.html('Save Changes');
                    }
                });
            });

            $(document).on('click','.delete',function(){
                let id = $(this).attr('data-id');
                let url = $(this).attr('data-url');
                $('#resource_id').val(id);
                $('#formConfirmDelete').attr('action', url);
            });

            $('#btnConfirmDelete').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('objectors.destroy.deceased') }}",
                    method: 'post',
                    data: $('#formConfirmDelete').serialize(),
                    success: function (data) {
                        $('#deleteModal').modal('toggle');
                        tableDeceased.ajax.reload();
                    }
                });
            });
        })

        let uploadedDocumentMap = {};
        Dropzone.options.dropzone = {
            url: '{{ route('deceased.storeMedia') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
            },
            success: function (file, response) {
                $('#addDeceasedForm').append('<input type="hidden" name="document[]" value="' + response.name + '">');
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {

                let name = '';

                if (uploadedDocumentMap[file.name] !== '') {
                    name = file.name;

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('deceased.removeMedia') }}",
                        method: 'post',
                        data: {file_name: uploadedDocumentMap[file.name]},
                        success: function (data) {
                            file.previewElement.remove();
                        }
                    });
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('#addDeceasedForm').find('input[name="document[]"][value="' + name + '"]').remove()
            }
        }
    </script>
@endsection
