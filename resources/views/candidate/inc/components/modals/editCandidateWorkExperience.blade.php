<!-- Modal -->
<div class="modal fade" id="editCandidateWorkExperience{{ $job->id }}" tabindex="-1" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Edit Work Epxerience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editCandidateWorkExperienceForm{{ $job->id }}">
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $job->id }}">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Company</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="companyName" value="{{ $job->companyName }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Position</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="position" value="{{ $job->position }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Tasks</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="tasks" value="{{ $job->tasks }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">City</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="companyCity" value="{{ $job->companyCity }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Country</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="companyCountry"
                                value="{{ $job->companyCountry }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">From</label>
                        <div class="col-lg-9">
                            <input class="form-control monthpicker" name="from" value="{{ $job->from }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Till</label>
                        <div class="col-lg-9">
                            <input class="form-control monthpicker" name="till" value="{{ $job->till }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="editCandidateExperience" data-id="{{ $job->id }}">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
