<!-- Modal -->
<div class="modal fade" id="addFile" tabindex="-1" aria-labelledby="addFileModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModal">Add File</h5>
            </div>
            <form enctype="multipart/form-data" id="addFileForm">
                <div class="modal-body">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                            <input type="file" class="custom-file-input" id="fileModalInput"
                                aria-describedby="fileModalInput" name="file">
                            <label class="custom-file-label" for="fileModalInput">Choose file</label>
                        </div>
                    </div>
                    <small id="errorFileUpload" class="d-block d-none text-danger m-2"></small>
                </div>
                <div class="modal-footer">
                    <a onclick="$(this).closest('form').submit();">
                        <i class="fi-rr-upload fa-2x other-data"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
