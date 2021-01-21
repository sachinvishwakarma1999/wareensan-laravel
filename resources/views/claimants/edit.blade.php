@extends('layouts.app')

@section('content_header')
    <h4 class="title">Claimant Registry</h4>
@endsection
@section('content')
    <div class="claimant-section">
        <div class="claimant-head">
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <div>
                    <h4 class="title">{{ $claimant->claimant_name }}</h4>
                    <p class="subtitle">Status: <span>Not Scheduled Yet</span></p>
                </div>

                <a href="#" class="btn btn-primary waiting_btn">Waiting</a>
            </div>
        </div>

        <div class="claimant-content">
            <div class="tabs-part">
                <ul class="nav nav-tabs nav-bordered customtab">
                    <li class="nav-item">
                        <a href="#claimant-details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-none d-lg-block">Claimant Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#claim-deceased" data-toggle="tab" aria-expanded="true"
                           class="nav-link">
                            <span class="d-none d-lg-block">Claim Deceased</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#payments" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-none d-lg-block">Payments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#activity-log" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-none d-lg-block">Activity Log</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="claimant-details">
                        <div class="claimant-edit-form-part">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!! Form::model($claimant, [
                                'method' => 'PUT',
                                'route' => ['claimants.update', $claimant->id]
                            ]) !!}
                            <div class="claimant-top-part">
                                <div class="claim_num_part">
                                    <label class="form-label">Claims No.</label>
                                    <span class="claim-num">{{ format_number($claimant->id, 7) }}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="form-label">Salutation</label>
                                        {!! Form::select( 'salutation', array('Mdm' => 'Mdm'), $claimant->salutation, array('class' => 'form-control') ) !!}
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Status</label>
                                        {!! Form::select( 'status', \App\Claimant::listStatus(), $claimant->status, array('class' => 'form-control') ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Claimant Name</label>
                                        {!! Form::text( 'claimant_name', $claimant->claimant_name, array( 'class' => 'form-control' ) ) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Claimant NRIC/FIN/Passport no.</label>
                                        {!! Form::text( 'passport_no', $claimant->passport_no, array( 'class' => 'form-control' ) ) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Contact No.</label>
                                        <div class="d-flex flex-wrap add_new_column">
                                            <select type="text" name="country_code" id="" class="form-control countryCode">
                                                
                                                @foreach($country as $coun)
                                                    <option data-countryCode="{{$coun->iso}}" value="{{$coun->phonecode}}" @if($claimant->country_code == $coun->phonecode) selected @endif>{{$coun->iso}} (+{{$coun->phonecode}})</option>
                                                @endforeach
                                            </select>
                                            {!! Form::text( 'contact_no', $claimant->contact_no, array( 'class' => 'form-control' ) ) !!}
                                            <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="form-label">Email Address</label>
                                                {!! Form::text( 'email', $claimant->email, array( 'class' => 'form-control' ) ) !!}
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Gender</label>
                                                {!! Form::select( 'gender', array( 'M' => 'Male', 'F' => 'Female'), $claimant->gender, array('class' => 'form-control') ) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <div class="d-flex flex-wrap postal_column">
                                            {!! Form::number( 'postal_code', null, array( 'placeholder' => 'Postal Code','id' => 'postal_code', 'class' => 'form-control '.($errors->has('postal_code') ? 'border-danger':'')) ) !!}
                                            <a class="btn btn-primary theme_btn" onclick="get_address()">Get Address</a>
                                            <!-- <button class="btn btn-primary theme_btn" onclick="get_address()">Get Address</button> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Block / House</label>
                                        {!! Form::text( 'block', $claimant->block, array( 'class' => 'form-control','id' => 'block' ) ) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Street</label>
                                        {!! Form::text( 'street', $claimant->street, array( 'class' => 'form-control','id' => 'street', ) ) !!}
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 row justify-content-between level_column">
                                            <div class="input_box">
                                                <label class="form-label">Level</label>
                                                {!! Form::number( 'level', $claimant->level, array( 'class' => 'form-control' ) ) !!}
                                            </div>
                                            <div class="input_box">
                                                <label class="form-label">Unit</label>
                                                {!! Form::number( 'unit', $claimant->unit, array( 'class' => 'form-control' ) ) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label">Residential Address</label>
                                                {!! Form::text( 'residential', null, array( 'placeholder' => 'Residential Address', 'class' => 'form-control', 'id' => 'residential' ) ) !!}
                                            </div>
                                        </div>

                                    </div> -->
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Remarks</label>
                                        {!! Form::textarea( 'remark', $claimant->remark, array( 'class' => 'form-control' ) ) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <ul class="form_btn_part d-flex flex-wrap">
                                        <li>
                                            {!! Form::submit( 'Update Changes', array( 'class' => 'btn btn-primary theme_btn' ) ) !!}
                                        </li>
                                        <li>
                                            <a href="" onClick="window.location.reload();"
                                               class="btn btn-primary theme_btn_outline">Clear Changes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="tab-pane" id="claim-deceased">
                        @include('claimants.partials.tabs.deceased', ['id' => $claimant->id])
                    </div>

                    <div class="tab-pane" id="payments">
                        @include('claimants.partials.tabs.payment', ['id' => $claimant->id, 'deceased' => $list_deceased])
                    </div>

                    <div class="tab-pane" id="activity-log">
                        @include('claimants.partials.tabs.activity', ['activities' => $activities])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script type="application/javascript">
        // $.fn.dataTable.moment( 'dd/MM/YYYY' );
        $(function () {

            var tableDeceased = $('.claim_deceased_table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                searching: false,
                lengthChange: false,
                paging: false,
                order: [[0, 'desc']],
                ajax: {
                    url: "{{ route('claimants.deceased', ['id' => $claimant->id]) }}",
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
                    {data: 'plague_name', name: 'plague_name'},
                    {data: 'gender', name: 'gender'},
                    {data: 'dod', name: 'dod'},
                    {data: 'block', name: 'block'},
                    {data: 'plot', name: 'plot'},
                    {data: 'sub_plot', name: 'sub_plot'},
                    {data: 'grave_type', name: 'grave_type'},
                    {data: 'relation', name: 'relation'},
                    {data: 'special_requirement', name: 'special_requirement'},
                    {data: 'status', name: 'status'},
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
                    url: "{{ route('claimants.add.deceased') }}",
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

            $('.select2').select2({width: '200px'});

            // Handle Add Payment
            let itemDeceasedElement = $('#itemDeceased');
            let itemPriceElement = $('#itemPrice');
            let tableElement = $('#tableItems');


            $('#btnAddItem').click(function (e) {
                e.preventDefault();

                let itemDeceased = itemDeceasedElement.val();
                let itemPrice = itemPriceElement.val();
                let listItems = [];

                $('#tableItems > tbody  > tr').each(function (index, val) {
                    let dataId = parseInt($(this).attr('data-id'));
                    listItems.push(dataId);
                });

                if (itemDeceased && itemPrice) {

                    itemDeceasedElement.parent('.form-group').removeClass('has-error');
                    itemPriceElement.parent('.form-group').removeClass('has-error');

                    let deceasedObj = jQuery.parseJSON($('option:selected', itemDeceasedElement).attr('data-object'));
                    if (!$.isEmptyObject(deceasedObj)) {
                        if( listItems.indexOf(deceasedObj.id) === -1 ) {
                            tableElement.find('tbody').append(
                                '<tr data-id="' + deceasedObj.id + '"><td>' + deceasedObj.name +
                                '</td><td>' + deceasedObj.plague_name +
                                '</td><td>' + deceasedObj.gender +
                                '</td><td>' + deceasedObj.dod +
                                '</td><td>' + deceasedObj.block +
                                '</td><td>' + deceasedObj.plot +
                                '</td><td>' + deceasedObj.sub_plot +
                                '</td><td>' + deceasedObj.grave_type +
                                '</td><td>' + deceasedObj.relation +
                                '</td><td class="price">' + itemPrice +
                                '</td><td>' + '<a href="javascript:void(0)" onclick="deleteItem(' + deceasedObj.id + ')" class="view_btn" >Delete</a>' +
                                '</td></tr>'
                            );

                            listItems.push(deceasedObj.id);

                            calculatorTotal();

                        }else{
                            alert('The item has been added');
                        }
                    }
                } else {
                    if (itemDeceased === "") {
                        itemDeceasedElement.parent('.form-group').addClass('has-error');
                    }

                    if (itemPrice === "") {
                        itemPriceElement.parent('.form-group').addClass('has-error');
                    }
                }
            });

            $('#btnAddPayment').click(function (e) {
                let msgError = $('#msgErrorPayment');
                let btnAddPayment = $('#btnAddPayment');
                let items = [];
                let paymentMode = $('#paymentMode').val();
                let paymentRemark = $('#paymentRemark').val();

                $('#tableItems > tbody  > tr').each(function(index, val) {
                    let price = parseFloat($(this).find('.price').text());
                    let id = parseInt($(this).attr('data-id'));

                    items.push({"id": id, "price": price});
                });

                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                btnAddPayment.html(' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\n' +
                    'Saving...');

                $.ajax({
                    url: "{{ route('claimants.add.payment', $claimant->id) }}",
                    method: 'post',
                    data: {'items': items, 'payment_mode': paymentMode, 'remark': paymentRemark},
                    success: function (data) {
                        $('#addPaymentModal').modal('toggle');
                        btnAddPayment.html('Save Changes');
                        tablePayment.ajax.reload();
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

                        btnAddPayment.html('Save Changes');
                    }
                });
            });

            var tablePayment = $('.claimant_payment_table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                searching: false,
                lengthChange: false,
                paging: false,
                order: [[0, 'desc']],
                ajax: {
                    url: "{{ route('claimants.paymentdatatable', ['id' => $claimant->id]) }}",
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
                    {data: 'id', name: 'id'},
                    {data: 'payment_mode', name: 'payment_mode'},
                    {data: 'total', name: 'total'},
                    {data: 'remark', name: 'remark'},
                    {data: 'created_by', name: 'created_by'},
                    // {data: 'block', name: 'block'},
                    // {data: 'plot', name: 'plot'},
                    // {data: 'sub_plot', name: 'sub_plot'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });

        function deleteItem(itemId) {

            if (itemId) {
                $('#tableItems tr[data-id="'+ itemId +'"]').remove();
                calculatorTotal();
            }
        }

        function calculatorTotal() {
            let tableElement = $('#tableItems');
            let graveNumber = $('#graveNumber');
            let subTotal = $('#subTotal');
            let paymentTax = $('#paymentTax');
            let paymentTotal = $('#paymentTotal');
            let itemArr = [];

            $('#tableItems > tbody  > tr').each(function(index, val) {
                let price = parseFloat($(this).find('.price').text());
                itemArr.push(price);
            });

            let subTotalVal = itemArr.reduce(function ( a, b) {
                return a + b
            }, 0);

            let taxVal = subTotalVal * 0.07;
            let totalVal = subTotalVal + taxVal;
            graveNumber.text(itemArr.length);
            subTotal.text('S$' + subTotalVal.toFixed(2));
            paymentTax.text('S$' + taxVal.toFixed(2));
            paymentTotal.text('S$' + totalVal.toFixed(2));
        }

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
    <script>
        function get_address(){
            var id = $('#postal_code').val();

            //alert(id);
            $.ajax({
                    url: "{{ route('claimants.add.postcode') }}",
                    method: 'post',
                    data: {'id' : id,'_token' : '{{csrf_token()}}'},
                success: function (data) {
                    var data = JSON.parse(data);
                    console.log(data.results[0].formatted_address);
                    //console.log(data);
                    $('#block').val(data.results[0].formatted_address);
                    $('#street').val(data.results[0].formatted_address);
                }
            });
        }
    </script>
@endsection
