<!-- Modal -->
<div class="modal fade" id="deleteCandidateEducationModal{{ $education->id }}" tabindex="-1"
    aria-labelledby="addFileModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModal">Delete Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteCandidateEducationForm{{ $education->id }}"
                action="{{ route('school.destroy',$education->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to <span class="text-danger">delete
                    </span><span>{{ $education->schoolName }}</span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="deleteCandidateEducationButton"
                        onclick="deleteCandidateEducation({{ $education->id }})">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
