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
    {!! Form::model($objector, [
        'method' => 'PUT',
        'route' => ['objectors.update', $objector->id]
    ]) !!}
    <div class="claimant-top-part">
        <div class="claim_num_part">
            <label class="form-label">Objector No.</label>
            <span class="claim-num">{{ format_number($objector->id, 7) }}</span>
        </div>
        <div class="salutation_part">
            <label class="form-label">Salutation</label>
            {!! Form::select('salutation', ['Mdm' => 'Mdm'], $objector->salutation, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-box">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Objector Name</label>
                    {!! Form::text('objector_name', $objector->objector_name, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="form-label">Objector NRIC/FIN/Passport no.</label>
                    {!! Form::text('passport_no', $objector->passport_no, ['class' => 'form-control w-85']) !!}
                </div>

                <div class="form-group">
                    <label class="form-label">Contact No.</label>
                    <div class="d-flex flex-wrap add_new_column">
                        {!! Form::text('contact_no', $objector->contact_no, ['class' => 'form-control']) !!}
                        <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="form-label">Email Address</label>
                            {!! Form::text( 'email', $objector->email, array( 'placeholder' => 'Email Address', 'class' => 'form-control' ) ) !!}
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                            {!! Form::select( 'gender', array( 'M' => 'Male', 'F' => 'Female'), $objector->gender, array('class' => 'form-control') ) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Postal Code</label>
                    <div class="d-flex flex-wrap postal_column">
                        {!! Form::text('postal_code', $objector->postal_code, ['class' => 'form-control']) !!}
                        <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Block / House</label>
                    {!! Form::text('block', $objector->block, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="form-label">Street</label>
                    {!! Form::text('street', $objector->street, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <div class="col-md-6 row justify-content-between level_column">
                        <div class="input_box">
                            <label class="form-label">Level</label>
                            {!! Form::number('level', $objector->level, ['class' => 'form-control']) !!}
                        </div>
                        <div class="input_box">
                            <label class="form-label">Unit</label>
                            {!! Form::number('unit', $objector->unit, ['class' => 'form-control']) !!}
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
                        {!! Form::text('mail_address[postal_code]', $objector->mail_address->postal_code, ['class' => 'form-control']) !!}
                        <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Block / House</label>
                    {!! Form::text('mail_address[block]', $objector->mail_address->block, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="form-label">Street</label>
                    {!! Form::text('mail_address[street]', $objector->mail_address->street, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <div class="col-md-6 row justify-content-between level_column">
                        <div class="input_box">
                            <label class="form-label">Level</label>
                            {!! Form::number('mail_address[level]', $objector->mail_address->level, ['class' => 'form-control']) !!}
                        </div>
                        <div class="input_box">
                            <label class="form-label">Unit</label>
                            {!! Form::number('mail_address[unit]', $objector->mail_address->unit, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Reason For Objection</label>
                {!! Form::textarea('remark', $objector->remark, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-12">
            <ul class="form_btn_part d-flex flex-wrap">
                <li>
                    {!! Form::submit( 'Update Changes', array( 'class' => 'btn btn-primary theme_btn' ) ) !!}
                </li>
                <li>
                    <a href="" onClick="window.location.reload();" class="btn btn-primary theme_btn_outline">Clear Changes</a>
                </li>
            </ul>
        </div>
    </div>
    {!! Form::close() !!}
</div>
