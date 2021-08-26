<div class="col-12">
    <h3 class="form-heading form-text text-info p-2 rounded">Professional experiences</h3>
    <hr class="bg-info">
</div>
<div class="col-lg-12 col-md-6">
    <div class="row repeater-row-experience">
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>Working period from</label>
            <input type="month"
                class="form-control monthpicker @if ($errors->has('from')) is-invalid @elseif (!empty(old('from'))) is-valid @endif"
                name="from[]" id="from">
            <small class="text-danger error">
                @if ($errors->has('from'))
                {{ $errors->first('from') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>Working period till</label>
            <input type="month"
                class="form-control monthpicker @if ($errors->has('till')) is-invalid @elseif (!empty(old('till'))) is-valid @endif"
                name="till[]" id="till">
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>Role/Title</label>
            <input type="text"
                class="form-control @if ($errors->has('position')) is-invalid @elseif (!empty(old('position'))) is-valid @endif"
                name="position[]" id="position">
            <small class="text-danger error">
                @if ($errors->has('position'))
                {{ $errors->first('position') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>Company name</label>
            <input type="text"
                class="form-control @if ($errors->has('companyName')) is-invalid @elseif (!empty(old('companyName'))) is-valid @endif"
                name="companyName[]" id="companyName">
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>City</label>
            <input type="text"
                class="form-control @if ($errors->has('companyCity')) is-invalid @elseif (!empty(old('companyCity'))) is-valid @endif"
                name="companyCity[]" id="companyCity">
            <small class="text-danger error">
                @if ($errors->has('companyCity'))
                {{ $errors->first('companyCity') }}
                @endif
            </small>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
            <label>Country</label>
            <input type="text"
                class="form-control @if ($errors->has('companyCountry')) is-invalid @elseif (!empty(old('companyCountry'))) is-valid @endif"
                name="companyCountry[]" id="companyCountry">
            <small class="text-danger error">
                @if ($errors->has('companyCountry'))
                {{ $errors->first('companyCountry') }}
                @endif
            </small>
        </div>
        <div class="col-lg-11 pb-4">
            <label class="text-center">Tasks performed</label>
            <textarea
                class="form-control @if ($errors->has('tasks')) is-invalid @elseif (!empty(old('tasks'))) is-valid @endif"
                rows="5" name="tasks[]" id="tasks"></textarea>
        </div>
        <div class="col-lg-1 py-5">
            <a class="d-block delete-experience my-4">
                <span class="">
                    <i class="fa fa-trash fa-lg text-danger delete-icon d-none"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="dynamic-stuff-experience">
    </div>
    <div class="row">
        <div class="col-12 col-md-5 pb-4">
            <button type="button" class="btn btn-outline-success btn-sm add-one-experience">Add
                Professional
                Experience <i class="fa fa-plus"></i></button>
        </div>
    </div>
</div>
