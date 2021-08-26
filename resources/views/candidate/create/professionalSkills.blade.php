<div class="col-12">
    <h3 class="form-heading form-text text-info p-2 rounded">Professional Skills</h3>
    <hr class="bg-info">
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12 col-md-6 pb-4 pr-md-5">
            <label>Professional Skill</label>
            <input type="text"
                class="form-control @if ($errors->has('professionalSkills')) is-invalid @elseif (!empty(old('professionalSkills'))) is-valid @endif"
                name="professionalSkills[]" id="professionalSkills">
            <small class="text-danger error">
                @if ($errors->has('professionalSkills'))
                {{ $errors->first('professionalSkills') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-4 pb-4 form-group pl-md-5">
            <label>Knowledge level</label>
            <select
                class="form-control @if ($errors->has('professionalSkillsLevel')) is-invalid @elseif (!empty(old('professionalSkillsLevel'))) is-valid @endif"
                name="professionalSkillsLevel[]" id="professionalSkillsLevel">
                <option value="">Choose an option</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
            <small class="text-danger error">
                @if ($errors->has('professionalSkillsLevel'))
                {{ $errors->first('professionalSkillsLevel') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-1 pb-4">
        </div>
    </div>
    <div class="dynamic-stuff-skill">
    </div>
    <div class="row">
        <div class="col-12 col-md-3 pb-4 form-group">
            <button type="button" class="btn btn-outline-success btn-sm add-one-skill">Add Skill <i
                    class="fa fa-plus"></i></button>
        </div>
    </div>
</div>
