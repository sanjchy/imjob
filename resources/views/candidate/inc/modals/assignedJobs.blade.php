<!-- Modal -->
<div class="modal fade" id="assignedJobModal{{ $recruitment->job->id }}" tabindex="-1" role="dialog"
    aria-labelledby="assignedJobModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="assignedJobs{{ $recruitment->job->id }}"
                onsubmit="updateRecruitment(event,{{ $recruitment->id }});">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 p-2">Status</div>
                        <div class="col-lg-9">
                            <input type="hidden" name="job_id" value="{{ $recruitment->job->id }}">
                            <input type="hidden" name="candidate_id" value="{{ $recruitment->candidate->id }}">
                            <input type="text" value="{{ $recruitment->status }}"
                                class="form-control candidateStatusFormField{{ $recruitment->id }}" name="status">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="assignedCandidateStatusSaveButton" data-candidate-id="{{ $recruitment->candidate->id }}"
                        data-job-id="{{ $recruitment->job->id }}">
                        <i class="fi-rr-check other-data fa-lg"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal --}}
