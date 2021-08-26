<!-- Modal -->
<div class="modal fade" id="editCandidateEducationModal{{ $education->id }}" tabindex="-1"
    aria-labelledby="addFileModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModal">Edit Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editCandidateEducationForm{{ $education->id }}"
                action="{{ route('school.update',$education->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $education->id }}">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">School Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="schoolName"
                                value="{{ $education->schoolName }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Qualification</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="qualification"
                                value="{{ $education->qualification }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">City</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="schoolCity"
                                value="{{ $education->schoolCity }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Country</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="schoolCountry"
                                value="{{ $education->schoolCountry }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Graduated</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="graduated"
                                value="{{ $education->graduated }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="editCandidateEducation" data-id="{{ $education->id }}">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
