<!-- Modal -->
<div class="modal fade" id="assignedCandidateModal{{ $recruitment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="assignedCandidateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="assignedCandidateModalLabel align-baseline d-flex justify-content-between">
                    <a
                        href="{{ route('candidate.show',$recruitment->candidate->id) }}">{{ $recruitment->candidate->firstName .' '. $recruitment->candidate->lastName }}</a>
                    <span class="text-dark p-1 mx-2 font-weight-bold">assigned </span>
                    <small>{{ $recruitment->created_at->format('d.m.Y') }}</small>
                    <span class="text-dark p-1 mx-2 font-weight-bold">by </span>
                    @if ($recruitment->user_id)
                    <a
                        href="{{ route('user.show', $recruitment->user_id) }}">{{ ucwords($recruitment->user->name) }}</a>
                    @endif
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form onsubmit="updateRecruitment(event,{{ $recruitment->id }})">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3 p-2">Status</div>
                        <div class="col-lg-9">
                            <input type="text" value="{{ $recruitment->status }}"
                                class="form-control candidateStatusFormField{{ $recruitment->id }}" name="status">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary assignedCandidateStatusSaveButton">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
