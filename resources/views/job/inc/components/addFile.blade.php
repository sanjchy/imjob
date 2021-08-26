<!-- Modal -->
<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="fileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileModal">Add new File for
                    <span class="text-primary">
                        {{ $job->requiredProfession }}
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="fileAddForm" enctype="multipart/form-data" action="{{ route('file-store') }}"
                    method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileInputField" name="file">
                            <label class="custom-file-label" for="fileInputField">Choose file</label>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-success float-right file-save">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
