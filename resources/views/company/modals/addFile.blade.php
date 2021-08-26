<!-- Modal -->
<div class="modal fade" id="addFile" tabindex="-1" aria-labelledby="addFileModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModal">Add File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" id="addFileForm">
                <div class="modal-body">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileModalInput"
                                aria-describedby="fileModalInput" name="file">
                            <label class="custom-file-label" for="fileModalInput">Choose file</label>
                        </div>
                    </div>
                    <small id="errorFileUpload" class="d-block d-none text-danger m-2"></small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="AddFileFormSaveButton">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
