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
            <form enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileModalInput"
                                aria-describedby="fileModalInput" name="file">
                            <label class="custom-file-label" for="fileModalInput">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
