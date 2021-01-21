<!-- Delete Warning Modal -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
     aria-hidden="true">
    <form action="" method="post" id="formConfirmDelete">
        @csrf
{{--        @method('DELETE')--}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Deceased</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="resource_id" name="deceased_id" type="hidden">
                    <input id="objector_id" name="objector_id" type="hidden" value="{{$id}}">
                    <h5 class="text-center">Are you sure you want to delete this deceased?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" id="btnConfirmDelete">Yes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- End Delete Modal -->
