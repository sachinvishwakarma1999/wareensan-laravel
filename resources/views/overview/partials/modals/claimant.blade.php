<!-- Add New Claimant Popup -->
<div id="addNewClaimantModal" data-backdrop="static" class="modal fade theme_modal theme_modal_header_bg bgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Claimant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body">
                <div id="msgError"></div>
                <div class="claimant-edit-form-part">
                    <form method="post" id="addClaimantForm">
                        <div class="claimant-top-part">
                            <div class="row">
                                <div class="col-md-"2>
                                    <label class="form-label">Salutation</label>
                                    {!! Form::select('salutation', ['Mdm' => 'Mdm'], null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Status</label>
                                    {!! Form::select('status', \App\Claimant::listStatus(), \App\Claimant::STATUS_WAITING, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Claimant Name</label>
                                    {!! Form::text('claimant_name', null, ['class' => 'form-control', 'placeholder' => 'Claimant Test 123']) !!}
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Claimant NRIC/FIN/Passport no.</label>
                                    {!! Form::text('passport_no', null, ['class' => 'form-control w-85', 'placeholder' => 'S1234567A']) !!}
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Contact No.</label>
                                    <div class="d-flex flex-wrap add_new_column">
                                        {!! Form::number('contact_no', null, ['class' => 'form-control', 'placeholder' => '91234567 (Daughter)']) !!}
                                        <a href="#" class="btn btn-primary theme_btn">Add new +</a>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="form-label">Email Address</label>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Claimanttest@wareesan.com']) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <div class="d-flex flex-wrap postal_column">
                                        {!! Form::text('postal_code', null, ['class' => 'form-control', 'placeholder' => '123456']) !!}
                                        <a href="#" class="btn btn-primary theme_btn">Get Address</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Block / House</label>
                                    {!! Form::number('block', null, ['class' => 'form-control', 'placeholder' => 'blk123']) !!}
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Street</label>
                                    {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) !!}
                                </div>

                                <div class="form-group mb-4">
                                    <div class="col-md-6 row justify-content-between level_column">
                                        <div class="input_box">
                                            <label class="form-label">Level</label>
                                            {!! Form::number('level', null, ['class' => 'form-control', 'placeholder' => '05']) !!}
                                        </div>
                                        <div class="input_box">
                                            <label class="form-label">Unit</label>
                                            {!! Form::number('unit', null, ['class' => 'form-control', 'placeholder' => '27']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Remarks</label>
                                    {!! Form::textarea('remark', null, ['class' => 'form-control', 'placeholder' => 'Enter any comments here.']) !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <ul class="form_btn_part d-flex flex-wrap">
                                    <li>
                                        <input type="submit" name="submit" class="btn btn-primary theme_btn" id="addBtnForm" value="Create Claim">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Add New Claimant Popup -->
