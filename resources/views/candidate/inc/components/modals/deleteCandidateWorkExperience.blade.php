<!-- Modal -->
<div class="modal fade" id="deleteCandidateWorkExperience{{ $job->id }}" tabindex="-1" aria-labelledby="addFileModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModal">Delete Work Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to <span class="text-danger">delete
                </span><span>{{ $job->companyName }}</span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" id="deleteCandidateEducationButton"
                    onclick="deleteCandidateExperience({{ $job->id }})">Yes</button>
            </div>
        </div>
    </div>
</div>
