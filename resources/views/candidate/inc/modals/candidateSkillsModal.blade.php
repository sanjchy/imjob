<!-- Modal -->
<div class="modal fade" id="candidateSkillsModal{{ $candidate->id }}" tabindex="-1" role="dialog"
    aria-labelledby="candidateSkillModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="candidateSkillModal">Skill </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($candidate->skills as $attribute)
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                            <div class="mx-0 my-1">
                                <p class="p-0 m-0 font-weight-bold">
                                    {{ ucwords($attribute->skill) }}
                                </p>
                                <span>
                                    <span>
                                        <span class="font-weight-bolder text-muted">Level:</span>
                                        <small>&nbsp;{{ ucwords($attribute->level) }}</small>
                                    </span>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
</div>
