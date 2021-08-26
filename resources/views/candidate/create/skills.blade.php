<div class="container">
    <div class="col-12">
        <h3 class="form-heading form-text text-info p-2 rounded">Professional Skills</h3>
        <hr class="bg-info">
    </div>
    <div class="col-12">
        <div class="row repeater-row-skill d-flex justify-content-center">
            <div class="col-12 col-md-6 pb-4 pr-md-5">
                <label class="lazy-load">Professional Skill</label>
                <input type="text" class="form-control " name="professionalSkills[]" id="professionalSkills">
                <small class="text-danger error">
                </small>
            </div>
            <div class="col-12 col-md-4 pb-4 form-group pl-md-5">
                <label>Knowledge level</label>
                <select class="form-control " name="professionalSkillsLevel[]" id="professionalSkillsLevel">
                    <option value="">Choose an option</option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
                <small class="text-danger error">
                </small>
            </div>
            <div class="col-12 col-md-1 pb-4">
                <div class="mb-2">
                    &nbsp;
                </div>
                <a class="d-block delete mt-3">
                    <span class="">
                        <i class="fa fa-trash fa-lg delete-icon delete-skill text-danger d-none"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="dynamic-stuff-skill">
        </div>
        <div class="row">
            <div class="col-12 col-md-3 pb-4 form-group">
                <button type="button" class="btn btn-outline-success btn-sm add-one-skill waves-effect waves-light">Add
                    Skill <i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
