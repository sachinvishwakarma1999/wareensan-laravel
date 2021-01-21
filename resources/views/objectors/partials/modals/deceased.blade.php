<div id="deceasedDetailsModal" data-backdrop="static"
     class="modal fade theme_modal theme_modal_header_bg fullWidthModal body-padding-none" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Deceased Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body">
                <div id="msgError">
                </div>
                <form method="post" action="#" id="addDeceasedForm">
                    <div class="claimant-top-part">
                        <label class="form-label">Deceased Name on New Plaque</label>
                        {!! Form::text('plague_name', null, ['class' => 'form-control w-45', 'placeholder' => 'Plague Name']) !!}
                    </div>

                    <div class="deceased-detail-part">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="deceased-detail-box">
                                <div class="deceased-box-head">
                                    <h4 class="title">Deceased Details</h4>
                                </div>

                                <div class="deceased-box-content">
                                    <div class="form-group">
                                        <label class="form-label">Deceased Name</label>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Deceased Name']) !!}
                                    </div>
                                    <div class="deceased-list">
                                        <div class="d-flex flex-wrap row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Deceased Type</label>
                                                    {!! Form::select('grave_type', ['principal' => 'Principal'], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Status</label>
                                                    {!! Form::select('status', ['0' => 'Not Verified', '1' => 'Verified'], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label class="form-label">Gender</label>
                                            {!! Form::select('gender', ['M' => 'Male', 'F' => 'Female'], null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Date Of Death</label>
                                            {!! Form::date('dod', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-label">Relationship to Objector</label>
                                        {!! Form::text('relation', null, ['class' => 'form-control', 'placeholder' => 'Relationship of Objector']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Special Requirement</label>
                                        {!! Form::text('special_requirement', null, ['class' => 'form-control', 'placeholder' => 'Special Requirement']) !!}
                                    </div>
                                    <div class="form-group block_input_part">
                                        <div class="d-flex flex-wrap">
                                            <div class="block_input">
                                                <label class="form-label">Block</label>
                                                {!! Form::number('block', null, ['placeholder' => 'Block', 'class' => 'form-control']) !!}
                                            </div>
                                            <div class="block_input">
                                                <label class="form-label">Plot No.</label>
                                                {!! Form::number('plot', null, ['placeholder' => 'Plot No.', 'class' => 'form-control']) !!}
                                            </div>
                                            <div class="block_input">
                                                <label class="form-label">Sub Plot No.</label>
                                                {!! Form::number('sub_plot', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Remarks</label>
                                        {!! Form::textarea('reason', null, ['class' => 'form-control', 'placeholder' => 'Enter any comments here.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="deceased-detail-box">
                                <div class="deceased-box-head d-flex align-items-center">
                                    <h4 class="title">Verification Documents</h4>
                                    <div class="custom-upload-part">
                                        <input type="file" name="file" id="file">
                                        <label class="btn btn-primary theme_btn upload_btn" for="file">Upload</label>
                                    </div>
                                </div>
                                <div class="deceased-box-content">
{{--                                    <div class="upload-layout">--}}
{{--                                        <div class="d-flex flex-wrap justify-content-between align-items-center">--}}
{{--                                            <div class="file-info">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <span class="mdi mdi-file-outline file-icon"></span>--}}

{{--                                                    <div class="upload-path">--}}
{{--                                                        <span>Claimstest123_Burial Certificate.pdf</span>--}}
{{--                                                        <span>27KB PDF Document</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <a href="#" class="removeBtn">--}}
{{--                                                <span class="mdi mdi-minus"></span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="drag-file-box">
{{--                                            <div class="dropszone" id="my-dropzone"></div>--}}
                                        <div action="{{ route('deceased.storeMedia') }}" class="dropzone" id="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-save-btn-part mt-3">
                            {!! Form::hidden('objector', $id, null) !!}
                            <ul class="form_btn_part d-flex flex-wrap align-items-center justify-content-end">
                                <li>
                                    <button id="addBtnForm" class="btn btn-primary theme_btn">Save
                                        Changes
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-secondary theme_btn_outline"
                                            data-dismiss="modal">Close
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
