<div class="row">
    <div class="col-12">
        <h3 class="form-heading form-text text-info p-2 rounded border-info">Personal data</h3>
        <hr class="bg-info">
    </div>
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" value="{{ old('firstName') }}" name="firstName">
                <small class="text-danger error">
                    @if ($errors->has('firstName'))
                    {{ $errors->first('firstName') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="address">Address</label>
                <input type="text" value="{{ old('address') }}" class="form-control" name="address">
                <small class="text-danger error">
                    @if ($errors->has('address'))
                    {{ $errors->first('address') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="phone">Phone number</label>
                <input type="tel" value="{{ old('phone') }}" class="form-control" name="phone">
                <small class="text-danger error">
                    @if ($errors->has('phone'))
                    {{ $errors->first('phone') }}
                    @endif
                </small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="lastName">Last name</label>
                <input type="text" value="{{ old('lastName') }}" class="form-control" name="lastName">
                <small class="text-danger error">
                    @if ($errors->has('lastName'))
                    {{ $errors->first('lastName') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="city">City/Postal code</label>
                <input type="text" value="{{ old('city') }}" class="form-control" name="city">
                <small class="text-danger error">
                    @if ($errors->has('city'))
                    {{ $errors->first('city') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" value="{{ old('email') }}" name="email">
                <small class="text-danger error">
                    @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                    @endif
                </small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="candidateGender">Gender</label>
                <select class="form-control" name="gender">
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <small class="text-danger error">
                    @if ($errors->has('gender'))
                    {{ $errors->first('gender') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" value="{{ old('country') }}" name="country">
                <small class="text-danger error">
                    @if ($errors->has('country'))
                    {{ $errors->first('country') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label>Upload your photo</label>
                <div class="custom-file">
                    <input type="file" class="form-control custom-file-input" name="image">
                    <label class="custom-file-label">Choose photo</label>
                    <small class="text-danger error">
                        @if ($errors->has('image'))
                        {{ $errors->first('image') }}
                        @endif
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="birthday">Date of birth</label>
                <input type="date" value="{{ old('birthday') }}" class="form-control datepicker selector"
                    name="birthday">
                <small class="text-danger error">
                    @if ($errors->has('birthday'))
                    {{ $errors->first('birthday') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" value="{{ old('citizenship') }}" class="form-control" name="citizenship">
                <small class="text-danger error">
                    @if ($errors->has('citizenship'))
                    {{ $errors->first('citizenship') }}
                    @endif
                </small>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 form-group">
                <label>Upload your CV</label>
                <div class="custom-file">
                    <input type="file" class="form-control custom-file-input" name="cv">
                    <label class="custom-file-label">Choose CV</label>
                    <small class="text-danger error">
                        @if ($errors->has('cv'))
                        {{ $errors->first('cv') }}
                        @endif
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
