@extends('layouts/layout')
@section('header')
@include('pages.contact.header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row my-2">
        <div class="container mb-5">
            <div class="pt-5"></div>
            <div class="wp-bootstrap-blocks-row row mb-5">
                <div class="col-12 col-md-6 pr-md-4 mb-5">
                    <h2 class="heading">@lang('contact_form.h1')</h2>
                    @if (session()->has('mailSent'))
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-success form-control" role="alert">
                            {{ session('mailSent') }}
                        </div>
                    </div>
                    @endif
                    <div role="form" class="wpcf7" id="wpcf7-f446-p262-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form action="{{ route('contact-us') }}" method="post" class="wpcf7-form init" id="contactUS">
                            @csrf
                            <div class="specialform contactform">
                                <div class="row">
                                    <div class="col-12 col-md-6 pb-4">
                                        <label>
                                            @lang('contact_form.name')
                                        </label>
                                        <span class="wpcf7-form-control-wrap name">
                                            <input type="text" name="name" value="{{ old('name') }}" size="40"
                                                class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
                                                aria-invalid="false" />
                                        </span>
                                        <small class="text-danger error">
                                            @if ($errors->has('name'))
                                            {{ $errors->first('name') }}
                                            @endif
                                        </small>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4">
                                        <label>
                                            @lang('contact_form.surname')
                                        </label>
                                        <span class="wpcf7-form-control-wrap surname">
                                            <input type="text" name="surname" value="{{ old('surname') }}" size="40"
                                                class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}"
                                                aria-invalid="false" />
                                        </span>
                                        <small class="text-danger error">
                                            @if ($errors->has('surname'))
                                            {{ $errors->first('surname') }}
                                            @endif
                                        </small>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4">
                                        <label>
                                            @lang('contact_form.email')
                                        </label>
                                        <span class="wpcf7-form-control-wrap email">
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="{{ $errors->has('email') ? 'is-invalid' : ''}} wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                aria-required="true" aria-invalid="false" />
                                            <small class="text-danger error">
                                                @if ($errors->has('email'))
                                                {{ $errors->first('email') }}
                                                @endif
                                            </small></span>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4">
                                        <label>
                                            @lang('contact_form.phone')
                                        </label>
                                        <span class="wpcf7-form-control-wrap phone">
                                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                                class="{{ $errors->has('phone') ? 'is-invalid' : ''}} wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                                aria-invalid="false" />
                                            <small class="text-danger error">
                                                @if ($errors->has('phone'))
                                                {{ $errors->first('phone') }}
                                                @endif
                                            </small>
                                        </span>
                                    </div>
                                    <div class="col-12 pb-4">
                                        <label>
                                            @lang('contact_form.message')
                                        </label>
                                        <span class="wpcf7-form-control-wrap message">
                                            <textarea name="message" cols="40" rows="10"
                                                class="{{ $errors->has('message') ? 'is-invalid' : ''}} wpcf7-form-control wpcf7-textarea form-control"
                                                aria-invalid="false">{{ old('message') }}</textarea>
                                        </span>
                                        <small class="text-danger error">
                                            @if ($errors->has('message'))
                                            {{ $errors->first('message') }}
                                            @endif
                                        </small>
                                    </div>
                                    <div class="col-12 pb-4">
                                        <span class="wpcf7-form-control-wrap acceptance-319">
                                            <span class="wpcf7-form-control wpcf7-acceptance">
                                                <span class="wpcf7-list-item">
                                                    <label class="bg-light">
                                                        <input type="checkbox"
                                                            class="{{ $errors->has('checkbox') ? 'is-invalid' : ''}} bg-light"
                                                            name="checkbox" value="1" aria-invalid="false" />
                                                        <span class="wpcf7-list-item-label bg-light">
                                                            @lang('contact_form.terms')
                                                            <a target="_blank"
                                                                href="{{ route('privacy-policy',app()->getLocale()) }}">
                                                                @lang('contact_form.privacy')
                                                            </a>
                                                        </span>
                                                    </label>
                                                    <small class="text-danger error">
                                                        @if ($errors->has('checkbox'))
                                                        {{ $errors->first('checkbox') }}
                                                        @endif
                                                    </small>
                                                </span>
                                            </span>
                                        </span>
                                        <br />
                                        <input type="submit" value="@lang('contact_form.send')"
                                            class="wpcf7-form-control wpcf7-submit btn btn-red" />
                                    </div>
                                </div>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 divider-left pl-md-4">
                    <h2 class="heading"></h2>
                    <div class="pb-3 contact-items">
                        <div class="row no-gutters">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                @lang('contact_form.office')
                            </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/position-3.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">Teodora Drajzera 11 L, @lang("contact_form.address")</span>
                            </div>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.0034526782906!2d20.446742530878907!3d44.78073494866536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a703bc9233ea1%3A0x1cd080972d4570a0!2sTeodora%20Drajzera%2011l%2C%20Beograd%2011000%2C%20Serbia!5e0!3m2!1sen!2snl!4v1590837760106!5m2!1sen!2snl"
                        allowfullscreen="" aria-hidden="false" tabindex="0" class="mapiframe2" width="100%" height="300"
                        frameborder="0"></iframe>
                    <div class="pb-3 contact-items">
                        <div class="row no-gutters">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                @lang('contact_form.email'): </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/mail-1.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">
                                    <a href="mailto:info@imjob.rs" class="text-danger">info@imjob.rs</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3 contact-items">
                        <div class="row no-gutters">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                @lang('contact_form.phone'): </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/phone.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">+381 11 4235496</span>
                            </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/viber-1.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">+381 69 3040595</span>
                            </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/whatsapp-1.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">+381 69 3040595</span>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3 contact-items">
                        <div class="row no-gutters">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                @lang('contact_form.social'): </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/facebook-1.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">
                                    <a href="https://www.facebook.com/ImJob-107828197738093" target="_blank"
                                        class="text-danger">
                                        I&#8217;mJob Official
                                    </a>
                                </span>
                            </div>
                            <div class="col-1">
                                <img src="{{ asset('storage/imjob/icons/linkedin-1.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11 d-flex align-items-center">
                                <span class="text">
                                    <a href="https://www.linkedin.com/company/imjob/?viewAsMember=true" target="_blank"
                                        class="text-danger">
                                        I&#8217;mJob LinkedIn
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <p>@lang('contact_form.disposal')</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
