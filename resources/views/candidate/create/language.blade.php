<div class="col-12">
    <h3 class="form-heading form-text text-info p-2 rounded">Languages</h3>
    <hr class="bg-info">
</div>
<!-- Language clone end -->
<div class="col-12">
    <div class="row p-0 repeater-row-language">
        <div class="col-12 col-md-6 pb-4">
            <label>Language</label>
            <input type="text"
                class="form-control @if ($errors->has('language')) is-invalid @elseif (!empty(old('language'))) is-valid @endif"
                name="language[]" id="language">
            <small class="text-danger error">
                @if ($errors->has('language'))
                {{ $errors->first('language') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-5 pb-4 pl-md-5">
            <label>Proficiency level</label>
            <select
                class="form-control @if ($errors->has('languageLevel')) is-invalid @elseif (!empty(old('languageLevel'))) is-valid @endif"
                name="languageLevel[]" id="languageLevel">
                <option value="">Choose an option</option>
                <option value="Native">Native</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
            <small class="text-danger error">
                @if ($errors->has('languageLevel'))
                {{ $errors->first('languageLevel') }}
                @endif
            </small>
        </div>
        <div class="col-lg-1 col-md-1 pb-4 delete-row">
            <div class="mb-2">
                &nbsp;
            </div>
            <a class="d-block delete mt-3">
                <span class="">
                    <i class="fa fa-trash fa-lg delete-icon delete-language text-danger d-none"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="dynamic-stuff-language">
    </div>
    <div class="row">
        <div class="col-12 col-md-3 pb-4 form-group">
            <button type="button" class="btn btn-outline-success btn-sm add-one-language">Add language
                <i class="fa fa-plus"></i></button>
        </div>
    </div>
</div>
