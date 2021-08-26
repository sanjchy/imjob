<!-- Modal -->
<div class="modal fade" id="changeStatus" tabindex="-1" role="dialog" aria-labelledby="changeStatusModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModal">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/job/{{ $job->id }}" method="post">
                <div class="modal-body">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <select class="form-control" id="jobStatus">
                            <option value="{{ 'open' }}" @if ($job->status == 'open') selected @endif>Open</option>
                            <option value="{{ 'closed' }}" @if ($job->status == 'closed') selected @endif>Closed
                            </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-outline-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
