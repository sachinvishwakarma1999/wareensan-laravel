<div class="claimant-edit-form-part">
    <form method="post" action="{{ route('deceased.actionedit') }}">
        @csrf
        <div class="claimant-top-part">
            <div class="claim_num_part">
                <label class="form-label">Deceased ID</label>
                <span class="claim-num"><input type="text" value="{{format_number($deceased->id, 7)}}" readonly class="form-control"></span>
            </div>
        <input type="hidden" name="id" value="{{$deceased->id}}">
            <div class="claim_num_part">
                <label class="form-label">Deceased Name</label>
                <span class="font-weight-bold">
                    <input type="text" value="{{$deceased->name}}" name="name"  class="form-control" required>
                    </span>
            </div>
        </div>

        <div class="claimant-top-part">
            <div class="claim_num_part">
                <label class="form-label">Deceased Name on Plague</label>
                <span class="font-weight-bold"> <input type="text" value="{{$deceased->plague_name}}"name="plague_name"  class="form-control" required></span>
            </div>
        </div>

        <div class="w-22">
            <div class="claimant-top-part">
                <div class="salutation_part">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="block-box text-center">
                            <label class="form-label">Block</label>
                            <span class="font-weight-bold"><input type="text" value="{{$deceased->block}}" name="block" class="form-control"></span>
                        </div>
                        <div class="block-box text-center">
                            <label class="form-label">Plot No.</label>
                            <span class="font-weight-bold">
                                <input type="text" value="  {{$deceased->plot}}" name="plot" class="form-control">
                              </span>
                        </div>
                        <div class="block-box text-center">
                            <label class="form-label">Sub Plot No.</label>
                            <span class="font-weight-bold">
                                <input type="text" value="{{$deceased->sub_plot}}" name="sub_plot" class="form-control">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="claimant-top-part">
                <div class="claim_num_part">
                    <label class="form-label">Burial Date</label>
                    <span class="font-weight-bold">{{\Carbon\Carbon::parse($deceased->dod)->format('d-M-Y')}}   <input type="date" name="burialdate" value="{{$deceased->dod}} "class="form-control"></span>
                </div>
            </div>
            <div class="claimant-top-part">
                <div class="salutation_part">
                    <div class="d-flex flex-wrap justify-content-between">

                        <div class="block-box">
                            <label class="form-label">Age at death</label>
                            <span class="font-weight-bold">
                                <input type="text"name="age" value="{{\Carbon\Carbon::parse($deceased->dod)->age}}" class="form-control"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="claimant-top-part">
            <div class="claim_num_part">
                <label class="form-label">Special Requirement</label>
                <span class="font-weight-bold text-red">
                    <input type="text"value="{{$deceased->special_requirement}}"name="Special" class="form-control"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Remarks</label>
                    <textarea name="remarks" class="form-control" placeholder="Enter any comments here."></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <ul class="form_btn_part d-flex flex-wrap">
                    <li>
                        <input type="submit" name="submit" class="btn btn-primary theme_btn" value="Edit Deceased Details">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
@include('deceaseds.partials.modals.confirm', ['deceased' => $deceased])
