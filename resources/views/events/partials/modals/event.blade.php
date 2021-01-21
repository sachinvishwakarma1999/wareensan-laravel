<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Event</strong></h4>
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect"
                        data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light" id="addBtnForm"
                        data-add="{{route('events.store')}}"
                        data-update="{{route('events.update')}}"
                        data-destroy="{{route('events.destroy')}}"
                >Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                        data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
