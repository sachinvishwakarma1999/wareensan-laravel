@extends('layouts.app')

@section('content_header')
    <h4 class="title">Objector Registry</h4>
@endsection

@section('content')
    <div class="claimant-section">
        <div class="claimant-head">
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <div>
                    <h4 class="title">Create Objector</h4>
                </div>

            </div>
        </div>

        <div class="claimant-content">
            {!! Form::open(array('route' => 'objectors.store','method'=>'POST')) !!}
            <div class="claimant-edit-form-part">
                <div class="form-box">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="claimant-top-part">
                        <div class="salutation_part">
                            <label class="form-label">Salutation</label>
                            {!! Form::select( 'salutation', array( 'Mdm' => 'Mdm' ), null, array('class' => 'form-control') ) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Objector Name</label>
                                {!! Form::text( 'objector_name', null, array( 'placeholder' => 'Objector Name', 'class' => 'form-control' ) ) !!}
                            </div>

                            <div class="form-group">
                                <label class="form-label">Objector NRIC/FIN/Passport no.</label>
                                {!! Form::text( 'passport_no', null, array( 'placeholder' => 'Objector NRIC/FIN/Passport no.', 'class' => 'form-control w-85') ) !!}
                            </div>

                            <div class="form-group">
                                <label class="form-label">Contact No.</label>
                                <div class="d-flex flex-wrap add_new_column">
                                    {!! Form::number( 'contact_no', null, array( 'placeholder' => 'Contact No.', 'class' => 'form-control' ) ) !!}
                                    <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label">Email Address</label>
                                        {!! Form::text( 'email', null, array( 'placeholder' => 'Email Address', 'class' => 'form-control' ) ) !!}
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
                                    {!! Form::number( 'postal_code', null, array( 'placeholder' => 'Postal Code', 'class' => 'form-control' ) ) !!}
                                    <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Block / House</label>
                                {!! Form::text( 'block', null, array( 'placeholder' => 'Block/House', 'class' => 'form-control' ) ) !!}
                            </div>

                            <div class="form-group">
                                <label class="form-label">Street</label>
                                {!! Form::text( 'street', null, array( 'placeholder' => 'Street Address', 'class' => 'form-control' ) ) !!}
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
                        </div>
                    </div>
                </div>
                <div class="form-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Postal Code</label>
                                <div class="d-flex flex-wrap postal_column">
                                    {!! Form::number( 'mail_address[postal_code]', null, array( 'placeholder' => 'Postal Code', 'class' => 'form-control' ) ) !!}
                                    <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Block / House</label>
                                {!! Form::text( 'mail_address[block]', null, array( 'placeholder' => 'Block/House', 'class' => 'form-control' ) ) !!}
                            </div>

                            <div class="form-group">
                                <label class="form-label">Street</label>
                                {!! Form::text( 'mail_address[street]', null, array( 'placeholder' => 'Street Address', 'class' => 'form-control' ) ) !!}
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 row justify-content-between level_column">
                                    <div class="input_box">
                                        <label class="form-label">Level</label>
                                        {!! Form::text( 'mail_address[level]', null, array( 'placeholder' => 'Level', 'class' => 'form-control' ) ) !!}
                                    </div>
                                    <div class="input_box">
                                        <label class="form-label">Unit</label>
                                        {!! Form::text( 'mail_address[unit]', null, array( 'placeholder' => 'Unit', 'class' => 'form-control' ) ) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
