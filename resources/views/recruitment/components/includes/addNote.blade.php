<!-- Modal -->
<div class="modal fade" id="AddNote" tabindex="-1" role="dialog" aria-labelledby="noteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header card-header p-2 m-0">
                <h5 class="modal-title my-0 py-0 font-weight-bold" id="noteModal">
                    Add new Note
                </h5>
            </div>
            <div class="modal-body p-1">
                <form id="noteAddForm">
                    @csrf
                    <input type="hidden" name="recruitment_id" value="{{ $recruitment->id }}">
                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="note"></textarea>
                    </div>
                    <a class="mr-2 float-right note-save" onclick="$(this).closest('form').submit();">
                        <i class="fi-rr-check fa-2x"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
