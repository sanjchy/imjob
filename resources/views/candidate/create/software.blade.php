<div class="col-12">
    <h3 class="form-heading form-text text-info p-2 rounded">Computer Skills</h3>
    <hr class="bg-info">
</div>
<div class="col-12">
    <div class="row repeater-row-software">
        <div class="col-12 col-md-6 pb-4 pr-md-5">
            <label>Skills</label>
            <input type="text"
                class="form-control @if ($errors->has('software')) is-invalid @elseif (!empty(old('software'))) is-valid @endif"
                name="software[]" id="software">
            <small class="text-danger error">
                @if ($errors->has('software'))
                {{ $errors->first('software') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-4 pb-4 form-group pl-md-5">
            <label>Knowledge level</label>
            <select
                class="form-control @if ($errors->has('softwareKnowledgeLevel')) is-invalid @elseif (!empty(old('softwareKnowledgeLevel'))) is-valid @endif"
                name="softwareKnowledgeLevel[]" id="softwareKnowledgeLevel">
                <option value="">Choose an option</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
            <small class="text-danger error">
                @if ($errors->has('softwareKnowledgdeLevel'))
                {{ $errors->first('softwareKnowledgdeLevel') }}
                @endif
            </small>
        </div>
        <div class="col-lg-1 col-md-1 pb-4 delete-row">
            <div class="mb-2">
                &nbsp;
            </div>
            <a class="d-block delete mt-3">
                <span class="">
                    <i class="fa fa-trash fa-lg delete-icon text-danger d-none delete-software"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="dynamic-stuff-software">
    </div>
    <div class="row">
        <div class="col-12 col-md-3 pb-4 form-group">
            <button type="button" class="btn btn-outline-success btn-sm add-one-software">
                Add Skill <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
</div>
