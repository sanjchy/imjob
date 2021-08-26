@extends('layouts/layout')
@section('header')
@include('pages.company_data_send.header')
@endsection
@section("content")
<div class="container mb-5">
    <div class="pt-5"></div>
    <x-company-registered />
    <div class="container">
        <div class="py-5 specialform">
            <div class="specialcard p-4">
                <div class="px-3">
                    <h2 class="cv-title mb-0">@lang('company_data_send.company_heading')</h2>
                    <p class="cv-desc">@lang('company_data_send.company_heading_description')</p>
                    <div class="joboffer-divider"></div>
                    <form class="pt-4" id="companyRequest">
                        <div class="row pb-2">
                            @csrf
                            <div class="col-12">
                                <h2 class="form-heading">@lang('company_data_send.form_heading')</h2>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.company_name')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('name')) is-invalid @elseif (!empty(old('name'))) is-valid @endif"
                                    value="{{ old('name') }}" name="name" id="name" required="">
                                <small class="text-danger error">
                                    @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.address')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('address')) is-invalid @elseif (!empty(old('address'))) is-valid @endif"
                                    id="address" name="address" value="{{ old('address') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('address'))
                                    {{ $errors->first('address') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.city_postal_code')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('city')) is-invalid @elseif (!empty(old('city'))) is-valid @endif"
                                    name="city" id="city" required="" value="{{ old('city') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('city'))
                                    {{ $errors->first('city') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.country')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('country')) is-invalid @elseif (!empty(old('country'))) is-valid @endif"
                                    id="country" name="country" value="{{ old('country') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('country'))
                                    {{ $errors->first('country') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.phone')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('phone')) is-invalid @elseif (!empty(old('phone'))) is-valid @endif"
                                    id="phone" name="phone" value="{{ old('phone') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('phone'))
                                    {{ $errors->first('phone') }}
                                    @endif
                                </small>
                            </div>
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.website')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('website')) is-invalid @elseif (!empty(old('website'))) is-valid @endif"
                                    id="website" name="website" value="{{ old('website') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('website'))
                                    {{ $errors->first('website') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.company_industry')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('industry')) is-invalid @elseif (!empty(old('industry'))) is-valid @endif"
                                    id="industry" name="industry" value="{{ old('industry') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('industry'))
                                    {{ $errors->first('industry') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.company_size')</label>
                                <input type="number"
                                    class="form-control @if ($errors->has('size')) is-invalid @elseif (!empty(old('size'))) is-valid @endif"
                                    id="size" name="size" value="{{ old('size') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('size'))
                                    {{ $errors->first('size') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12">
                                <h2 class="form-heading">@lang('company_data_send.refferent_information')</h2>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.first_name')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('first_name')) is-invalid @elseif (!empty(old('first_name'))) is-valid @endif"
                                    id="first_name" name="first_name" value="{{ old('first_name') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('first_name'))
                                    {{ $errors->first('first_name') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.last_name')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('last_name')) is-invalid @elseif (!empty(old('last_name'))) is-valid @endif"
                                    id="last_name" name="last_name" value="{{ old('last_name') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('last_name'))
                                    {{ $errors->first('last_name') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.role')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('referentRole')) is-invalid @elseif (!empty(old('referentRole'))) is-valid @endif"
                                    id="referentRole" name="referentRole" value="{{ old('referentRole') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('referentRole'))
                                    {{ $errors->first('referentRole') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.email')</label>
                                <input type="email"
                                    class="form-control @if ($errors->has('referentEmail')) is-invalid @elseif (!empty(old('referentEmail'))) is-valid @endif"
                                    id="referentEmail" name="referentEmail" value="{{ old('referentEmail') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('referentEmail'))
                                    {{ $errors->first('referentEmail') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_data_send.phone')</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('referentPhone')) is-invalid @elseif (!empty(old('referentPhone'))) is-valid @endif"
                                    id="referentPhone" name="referentPhone" value="{{ old('referentPhone') }}">
                                <small class="text-danger error">
                                    @if ($errors->has('referentPhone'))
                                    {{ $errors->first('referentPhone') }}
                                    @endif
                                </small>
                            </div>
                            <div class="col-12">
                                <h2 class="form-heading">@lang('company_data_send.other')</h2>
                            </div>
                            <div class="col-12 pb-4">
                                <label>@lang('company_data_send.about_company')</label>
                                <textarea name="about" rows="10"
                                    class="form-control @if ($errors->has('about')) is-invalid @elseif (!empty(old('about'))) is-valid @endif"
                                    id="about">{{ old('about') }}</textarea>
                                <small class="text-danger">
                                    @if ($errors->has('about'))
                                    {{ $errors->first('about') }}
                                    @endif
                                </small>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="consentcheck" name="terms">
                            <small class="text-danger">
                                @if ($errors->has('terms'))
                                {{ $errors->first('terms') }}
                                @endif
                            </small>
                            <label class="custom-control-label" for="consentcheck">@lang('company_data_send.privacy')
                                <a target="_blank"
                                    href="{{ route('privacy-policy',app()->getLocale()) }}">@lang('contact_form.privacy')</a></label>
                        </div>
                        <span class="btn-red-outline">
                            <button type="submit" class="btn btn-red text-uppercase" id="form_submit" name="form_submit"
                                value="client_form">@lang('company_data_send.send') <span class="pl-2"><svg
                                        class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                        </path>
                                    </svg><!-- <i class="fas fa-arrow-right"></i> --></span></button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/candidate/jquery.js') }}"></script>
@endsection
