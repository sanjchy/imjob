<div class="row">
    <div class="col-12 pb-2">
        <h3 class="form-heading form-text text-info p-2 rounded">Other</h3>
        <hr class="bg-info">
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 py-1">
        <label for="">Driving Licence</label>
        <input type="text" name="drivingLicence" placeholder="A B C D E"
            class="form-control @if ($errors->has('drivingLicence')) is-invalid @elseif (!empty(old('drivingLicence'))) is-valid @endif">
        <small class="text-danger error">
            @if ($errors->has('drivingLicence'))
            {{ $errors->first('drivingLicence') }}
            @endif
        </small>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 py-1">
        <label for="">Available From/Notice Period</label>
        <input type="month" name="availableFrom"
            class="form-control monthpicker @if ($errors->has('availableFrom')) is-invalid @elseif (!empty(old('availableFrom'))) is-valid @endif">
        <small class="text-danger error">
            @if ($errors->has('availableFrom'))
            {{ $errors->first('availableFrom') }}
            @endif
        </small>
    </div>
    <div class="col-12 py-4">
        <label>Other</label>
        <textarea
            class="form-control @if ($errors->has('message')) is-invalid @elseif (!empty(old('message'))) is-valid @endif"
            name="message" id="message" rows="10">
                        </textarea>
        <small class="text-danger error">
            @if ($errors->has('message'))
            {{ $errors->first('message') }}
            @endif
        </small>
    </div>
</div>
