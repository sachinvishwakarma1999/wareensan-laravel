@extends('layouts.app')

@section('content_header')
    <h4 class="title">Claimant Registry</h4>
@endsection
@section('content')
    <div class="claimant-section">
        <div class="claimant-head">
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <div>
                    <h4 class="title">Create Claimant</h4>
                </div>

            </div>
        </div>

        <div class="claimant-content">
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

                {!! Form::open(array('route' => 'claimants.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="claimant-top-part col-md-2">
                        <label class="form-label">Salutation</label>
                        {!! Form::select( 'salutation', array( 'Mr' => 'Mr', 'Mrs' => 'Mrs', 'Mdm' => 'Mdm', 'Ms' => 'Ms', ), null, array('class' => 'form-control') ) !!}
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        {!! Form::select( 'status', \App\Claimant::listStatus(), \App\Claimant::STATUS_WAITING, array('class' => 'form-control') ) !!}
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Claimant Name</label>
                            {!! Form::text( 'claimant_name', null, array( 'placeholder' => 'Claimant Name', 'class' => 'form-control '.($errors->has('claimant_name') ? 'border-danger':''), 'id' => 'claimant_name', )) !!}
                        </div>

                        <div class="form-group">
                            <label class="form-label">Claimant NRIC/FIN/Passport no.</label>
                            {!! Form::text( 'passport_no', null, array( 'placeholder' => 'Claimant NRIC/FIN/Passport no.', 'class' => 'form-control w-85 '.($errors->has('passport_no') ? 'border-danger':'')) ) !!}
                        </div>

                        <div class="form-group">
                            <label class="form-label">Contact No.</label>
                            <div class="d-flex flex-wrap add_new_column">
                                {{-- <select type="text" name="country_code" id="" class="form-control countryCode">

                                    @foreach($country as $coun)
                                        <option data-countryCode="{{$coun->iso}}" value="{{$coun->phonecode}}" >{{$coun->iso}} (+{{$coun->phonecode}})</option>
                                    @endforeach

                                </select> --}}
                                {!! Form::text( 'contact_no', null, array( 'placeholder' => 'Contact No.', 'class' => 'form-control '.($errors->has('contact_no') ? 'border-danger':'')) ) !!}
                                <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="form-label">Email Address</label>
                                    {!! Form::text( 'email', null, array( 'placeholder' => 'Email Address', 'class' => 'form-control', 'id' => 'email' ) ) !!}
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Gender</label>
                                    {!! Form::select( 'gender', array( 'M' => 'Male', 'F' => 'Female'), null, array('class' => 'form-control') ) !!}
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
                            {!! Form::text( 'block', null, array( 'placeholder' => 'Block/House','id' => 'block','class' => 'form-control '.($errors->has('block') ? 'border-danger':'') ) ) !!}
                        </div>

                        <div class="form-group">
                            <label class="form-label">Street</label>
                            {!! Form::text( 'street', null, array( 'placeholder' => 'Street Address', 'id' => 'street', 'class' => 'form-control '.($errors->has('street') ? 'border-danger':'') ) ) !!}
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 row justify-content-between level_column">
                                <div class="input_box">
                                    <label class="form-label">Level</label>
                                    {!! Form::text( 'level', null, array( 'placeholder' => 'Level', 'class' => 'form-control' ) ) !!}
                                </div>
                                <div class="input_box">
                                    <label class="form-label">Unit</label>
                                    {!! Form::text( 'unit', null, array( 'placeholder' => 'Unit', 'class' => 'form-control' ) ) !!}
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="col">
                                <div class="input_box">
                                    <input type="checkbox" name="checkbox" id="checkbox" >
                                    <label class="form-label" style="margin-top: -12px;margin-left: 10px;">Click check box if mailing address is the same as residential address</label>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
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
                            {!! Form::textarea( 'remark', null, array( 'placeholder' => 'Enter any comments here.', 'class' => 'form-control' ) ) !!}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <ul class="form_btn_part d-flex flex-wrap">
                            <li>
                                {!! Form::submit( 'Create', array('class' => 'btn btn-primary theme_btn') ) !!}
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
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#claimant_name").keyup(function(e){
                 var x = document.getElementById("claimant_name");
                 //x.value = x.value.toUpperCase();
                 if (e.key === ' ' || e.key === 'Spacebar') {
                    e.preventDefault()
                    //console.log('Space pressed')
                    alert('Not spaces' + x.value);
                    //document.getElementById("claimant_name").value = trim(x.value);
                    $("#claimant_name").val("");
                    //$('#claimant_name').focus();
                    //$("#claimant_name").focus().val($("#claimant_name").val());

                  }
            });
        });

        $(document).ready(function() {
            $("#checkbox").click(function(){
                 var x = document.getElementById("email").value;
                 //alert(x);

                 if($('#checkbox').prop("checked") == true) {
                    //alert("hello");
                    $('#residential').val($('#email').val());
                 }
                 else{
                    $('#residential').val("");
                 }
                 
            });
        });
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
