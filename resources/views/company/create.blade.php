@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="card">
        <div id="success" class="alert-dismissible text-center"></div>
        <div class="card-body">
            <form method="post" action="/company" accept-charset="utf-8" id="companyRegister"
                class="companyCreateForm needs-validation" novalidate>
                @csrf
                <input type="hidden" name="user_id" value="@if (isset($user->id)){{ $user->id }}@endif">
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
                            id="name" name="name" value="{{ old('name') }}" placeholder="Company name">
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
                            id="address" placeholder="1234 Main St" name="address" value="{{ old('address') }}"
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
                            id="industry" name="industry" value="{{ old('industry') }}" placeholder="Company Industry">
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
                            id="phone" name="phone" value="{{ old('phone') }}" placeholder="Company Phone number">
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
                            id="country" name="country" value="{{ old('country') }}" placeholder="Company Country">
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
                            id="website" name="website" value="{{ old('website') }}" placeholder="Company website">
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
                            id="city" name="city" value="{{ old('city') }}" placeholder="Company City/Postal code">
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
                            id="size" name="size" value="{{ old('size') }}" placeholder="Company Size">
                        <small class="text-danger error">
                            @if ($errors->has('size'))
                            {{ $errors->first('size') }}
                            @endif
                        </small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-info p-2 mt-1 rounded">
                            Referent Information
                        </h3>
                        <hr class="bg-info">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-lg-6 col-md-6 pb-4">
                        <label for="referent">Referent<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('referent')) is-invalid @elseif (!empty(old('referent'))) is-valid @endif"
                            id="referent" name="referent" value="{{ old('referent') }}" placeholder="Referent">
                        <small class="text-danger error">
                            @if ($errors->has('referent'))
                            {{ $errors->first('referent') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4">
                        <label for="referentPhone">Referent phone number<small><span
                                    class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('referentPhone')) is-invalid @elseif (!empty(old('referentPhone'))) is-valid @endif"
                            id="referentPhone" name="referentPhone" value="{{ old('referentPhone') }}"
                            placeholder="Referent Phone number">
                        <small class="text-danger error">
                            @if ($errors->has('referentPhone'))
                            {{ $errors->first('referentPhone') }}
                            @endif
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4">
                        <label for="referentRole">Referent role<small><span
                                    class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="text"
                            class="form-control @if ($errors->has('referentRole')) is-invalid @elseif (!empty(old('referentRole'))) is-valid @endif"
                            id="referentRole" name="referentRole" value="{{ old('referentRole') }}"
                            placeholder="Referent Role">
                        <small class="text-danger error">
                            @if ($errors->has('referentRole'))
                            {{ $errors->first('referentRole') }}
                            @endif

                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-4">
                        <label for="referentEmail">Email<small><span class="fa fa-asterisk fa-xs text-danger error pl-2"
                                    aria-hidden="true"></span></small></label>
                        <input type="email"
                            class="form-control @if ($errors->has('referentEmail')) is-invalid @elseif (!empty(old('referentEmail'))) is-valid @endif"
                            id="referentEmail" name="referentEmail" value="{{ old('referentEmail') }}"
                            placeholder="Referent Email">
                        <small class="text-danger error">
                            @if ($errors->has('referentEmail'))
                            {{ $errors->first('referentEmail') }}
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
                            id="about" placeholder="Company description">{{ old('about') }}</textarea>
                        <small class="text-danger">
                            @if ($errors->has('about'))
                            {{ $errors->first('about') }}
                            @endif
                        </small>
                    </div>
                </div>
                <div class="row pb-2 mt-3 d-flex justify-content-center">
                    <div>
                        <button type="submit" class="btn btn-outline-info mb-2" id="companySaveButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
