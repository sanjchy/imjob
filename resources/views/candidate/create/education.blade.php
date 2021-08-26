<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="form-heading form-text text-info p-2 rounded">Education</h3>
            <hr class="bg-info">
        </div>
        <div class="form-group dynamic-element">
            <!-- Start Education -->
            <div class="col-12 repeater-row-education">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-md-2 pb-4 form-group">
                        <label for="schoolName">School name</label>
                        <input type="text" class="form-control" name="schoolName[]" id="schoolName">
                    </div>
                    <div class="col-lg-2 col-md-2 pb-4 form-group">
                        <label>Qualification</label>
                        <input type="text" class="form-control" name="qualification[]" id="qualification">
                        <small class="text-danger error">
                            @if ($errors->has('qualification'))
                            {{ $errors->first('qualification') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-2 col-md-2 lg-pb-4 form-group">
                        <label>Year</label>
                        <input type="text" class="form-control yearpicker" name="graduated[]" id="graduated">
                        <small class="text-danger error">
                            @if ($errors->has('graduated'))
                            {{ $errors->first('graduated') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-2 col-md-2 pb-4">
                        <label>City</label>
                        <input type="text" class="form-control" name="schoolCity[]" id="schoolCity">
                        <small class="text-danger error">
                            @if ($errors->has('schoolCity'))
                            {{ $errors->first('schoolCity') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-2 col-md-2 pb-4">
                        <label>Country</label>
                        <input type="text" class="form-control" name="schoolCountry[]" id="schoolCountry">
                        <small class="text-danger error">
                            @if ($errors->has('schoolCountry'))
                            {{ $errors->first('schoolCountry') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-1 col-md-1 pb-4 delete-row">
                        <div class="mb-2">
                            &nbsp;
                        </div>
                        <a class="d-block delete mt-3">
                            <span class="">
                                <i class="fa fa-trash fa-lg delete-icon text-danger d-none"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dynamic-stuff-education">
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-success btn-sm add-one-education m-2">Add
                    Education
                    <i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
