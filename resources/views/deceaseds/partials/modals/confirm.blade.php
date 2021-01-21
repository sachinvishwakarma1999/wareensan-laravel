<!-- Confirm Popup -->
<div id="confirmModal" data-backdrop="static" class="modal fade theme_modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <form class="modal-dialog" method="post" action="{{route('deceaseds.add.reason', $deceased->id)}}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Deceased Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label class="form-label">Please enter the reason for editing Deceased Record</label>
                    <textarea class="form-control" name="reason" placeholder="Grave Discrepancy" required></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary theme_btn">Confirm</button>
                <button type="button" class="btn btn-primary theme_btn_outline" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </form>
</div>
<!-- / Confirm Popup -->
