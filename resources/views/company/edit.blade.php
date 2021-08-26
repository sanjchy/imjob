@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="card">
        <div id="success" class="alert-dismissible text-center"></div>
        <div class="card-body">
            <form method="post" action="{{ route('company.update',$company->id) }}" accept-charset="utf-8"
                id="companyRegister" class="companyCreateForm needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="row pb-2">
                    <div class="col-12">
                        <h3 class="text-info p-2 mb-2 rounded">
                            <i class="fa fa-building"></i> Company Information
                        </h3>
                        <hr class="bg-info">
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4 form-group">
                        <label for="name">Company name <small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small>
                        </label>
                        <input type="text"
                            class="form-control @if ($errors->has('name')) is-invalid @elseif (!empty(old('name'))) is-valid @endif"
                            id="name" name="name" value="{{ $company->name }}" placeholder="Company name">
                        <small class="text-danger error">
                            @if ($errors->has('name'))
                            {{ $errors->first('name') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4 ">
                        <label for="address" class="text-center">Address<small><span
                                    class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small>
                        </label>
                        <input type="text"
                            class="form-control @if ($errors->has('address')) is-invalid @elseif (!empty(old('address'))) is-valid @endif"
                            id="address" placeholder="1234 Main St" name="address" value="{{ $company->address }}"
                            placeholder="Company Address">
                        <small class="text-danger error">
                            @if ($errors->has('address'))
                            {{ $errors->first('address') }}
                            @endif
                        </small>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-lg-6 col-md-6 pb-4 form-group">
                        <label for="industry">Industry<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('industry')) is-invalid @elseif (!empty(old('industry'))) is-valid @endif"
                            id="industry" name="industry" value="{{ $company->industry }}"
                            placeholder="Company Industry">
                        <small class="text-danger error">
                            @if ($errors->has('industry'))
                            {{ $errors->first('industry') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4  form-group">
                        <label for="phone">Phone number <small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('phone')) is-invalid @elseif (!empty(old('phone'))) is-valid @endif"
                            id="phone" name="phone" value="{{ $company->phone }}" placeholder="Company Phone number">
                        <small class="text-danger error">
                            @if ($errors->has('phone'))
                            {{ $errors->first('phone') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4  form-group">
                        <label for="country">Country<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('country')) is-invalid @elseif (!empty(old('country'))) is-valid @endif"
                            id="country" name="country" value="{{ $company->country }}" placeholder="Company Country">
                        <small class="text-danger error">
                            @if ($errors->has('country'))
                            {{ $errors->first('country') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4  form-group">
                        <label for="website">Website<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('website')) is-invalid @elseif (!empty(old('website'))) is-valid @endif"
                            id="website" name="website" value="{{ $company->website }}" placeholder="Company website">
                        <small class="text-danger error">
                            @if ($errors->has('website'))
                            {{ $errors->first('website') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4  form-group">
                        <label for="city">City/Postal code<small><span
                                    class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('city')) is-invalid @elseif (!empty(old('city'))) is-valid @endif"
                            id="city" name="city" value="{{ $company->city }}" placeholder="Company City/Postal code">
                        <small class="text-danger error">
                            @if ($errors->has('city'))
                            {{ $errors->first('city') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4  form-group">
                        <label for="size">Company size<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="number"
                            class="form-control @if ($errors->has('size')) is-invalid @elseif (!empty(old('size'))) is-valid @endif"
                            id="size" name="size" value="{{ $company->size }}" placeholder="Company Size">
                        <small class="text-danger error">
                            @if ($errors->has('size'))
                            {{ $errors->first('size') }}
                            @endif
                        </small>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-lg-8 col-md-8 offset-2">
                        <label for="companyAbout">About Company<span
                                class="fa fa-asterisk fa-xs text-danger pl-2"></span></label>
                        <textarea name="about" rows="10"
                            class="form-control @if ($errors->has('about')) is-invalid @elseif (!empty(old('about'))) is-valid @endif"
                            id="about" placeholder="Company description">{{ $company->about }}</textarea>
                        <small class="text-danger">
                            @if ($errors->has('about'))
                            {{ $errors->first('about') }}
                            @endif
                        </small>
                    </div>
                </div>
                <div class="row pb-2 mt-3">
                    <button type="submit" class="btn btn-outline-info col-2 offset-5 mb-2"
                        id="companySaveButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
