<div class="modal fade" tabindex="-1" role="dialog" id="commentRecruitmentProcess{{ $process->id }}"
    aria-labelledby="commentRecruitmentProcess{{ $process->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded shadow-sm">
            <div class="modal-header">
                Add New Comment
            </div>
            <div class="container-fluid pb-3 pt-3">
                <form method="post" action="{{ route("recruitmentProcessComment.store") }}" accept-charset="utf-8" id=""
                    class="needs-validation" novalidate>
                    @csrf
                    <input type="text" name="comment" class="form-control">
                    <input type="hidden" name="recruitment_process_id" value="{{ $process->id }}" class="form-control">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                    <button class="btn btn-sm btn-outline-success float-right" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
