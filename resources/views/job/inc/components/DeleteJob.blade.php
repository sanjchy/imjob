<!-- Modal -->
<div class="modal fade" id="deleteJob" tabindex="-1" role="dialog" aria-labelledby="deleteJobModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteJobModal">Are you sure ?</h5>
            </div>
            @if (Auth::user()->role == "SuperAdmin")
            <form id="deleteJobForm" action="{{ route('job.destroy',$job->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button class="btn btn-danger" type="submit">Yes</button>
                </div>
            </form>
            @else
            <p class="text-danger p-2">Only SuperAdmin can delete this Job.</p>
            @endif
        </div>
    </div>
</div>
