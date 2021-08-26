@extends('layouts.layout')
@section('header')
@include('pages.candidate_data_send.header')
@endsection
@section('content')
<x-candidate-registered />
<div class="container mb-5 pb-5">
    <div class=" py-5 specialform">
        <div class="specialcard p-4">
            <div class="px-3">
                <h2 class="cv-title mb-0">@lang('candidate_data_send.send_cv_heading')</h2>
                <p class="cv-desc">@lang('candidate_data_send.send_cv_p')</p>
                <div class="joboffer-divider"></div>
                <form method="POST" enctype="multipart/form-data" id="candidateRequest" class="pt-4 specialform"
                    action="{{ route('candidate-cv.store',app()->getLocale()) }}">
                    @csrf
                    @method('post')
                    <input type="hidden" name="job_id" id="joboffer_id" value="{{ request("job") }}">
                    <div class="row pb-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 order-lg-1 order-sm-12">
                                    <h2 class="form-heading">@lang('candidate_data_send.personal_data')</h2>
                                </div>
                                {{-- First Name --}}
                                <div class="col-lg-4 col-md-4 col-sm-12 pb-4 order-lg-2 order-sm-3">
                                    <label for="firstName">@lang('candidate_data_send.first_name')</label>
                                    <input type="text" class="form-control" value="{{ old('firstName') }}"
                                        name="firstName" id="firstName" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('firstName'))
                                        {{ $errors->first('firstName') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Address --}}
                                <div class="col-lg-4 col-md-4 col-sm-12 pb-4 order-3">
                                    <label for="address">@lang('candidate_data_send.address')</label>
                                    <input type="text" value="{{ old('address') }}" class="form-control" name="address"
                                        id="address" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('address'))
                                        {{ $errors->first('address') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Phone --}}
                                <div class="col-12 col-md-4 pb-4 order-4">
                                    <label for="phone">@lang('candidate_data_send.phone')</label>
                                    <input type="tel" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="phone" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('phone'))
                                        {{ $errors->first('phone') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Last Name --}}
                                <div class="col-12 col-md-4 pb-4 order-5">
                                    <label for="lastName">@lang('candidate_data_send.last_name')</label>
                                    <input type="text" value="{{ old('lastName') }}" class="form-control"
                                        name="lastName" id="lastName" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('lastName'))
                                        {{ $errors->first('lastName') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- City --}}
                                <div class="col-12 col-md-4 pb-4 order-6">
                                    <label for="city">@lang('candidate_data_send.city_postal_code')</label>
                                    <input type="text" value="{{ old('city') }}" class="form-control" name="city"
                                        id="city" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('city'))
                                        {{ $errors->first('city') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Email --}}
                                <div class="col-12 col-md-4 pb-4 order-7">
                                    <label for="email">@lang('candidate_data_send.email')</label>
                                    <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                        id="email" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Gender --}}
                                <div class="col-12 col-md-4 pb-4 order-8">
                                    <label for="candidateGender">@lang('candidate_data_send.select_gender')</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="">@lang('candidate_data_send.select_gender')</option>
                                        <option value="Male" @if (old('gender')=='Male' ) selected @endif>
                                            @lang('candidate_data_send.male')</option>
                                        <option value="Female" @if (old('gender')=='Female' ) selected @endif>
                                            @lang('candidate_data_send.female')</option>
                                    </select>
                                    <small class="text-danger error">
                                        @if ($errors->has('gender'))
                                        {{ $errors->first('gender') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Country --}}
                                <div class="col-12 col-md-4 pb-4 order-9">
                                    <label for="country">@lang('candidate_data_send.country')</label>
                                    <input type="text" class="form-control" value="{{ old('country') }}" name="country"
                                        id="country" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('country'))
                                        {{ $errors->first('country') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- IMAGE --}}
                                <div class="col-12 col-md-4 pb-4 order-10">
                                    <label>@lang('candidate_data_send.upload_photo')</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control custom-file-input" name="image"
                                            id="image">
                                        <label
                                            class="custom-file-label">@lang('candidate_data_send.chose_photo')</label>
                                        <small class="text-danger error">
                                            @if ($errors->has('image'))
                                            {{ $errors->first('image') }}
                                            @endif
                                        </small>
                                    </div>
                                </div>
                                {{-- Birthday --}}
                                <div class="col-12 col-md-4 pb-4 order-11">
                                    <label for="birthday">@lang('candidate_data_send.date_birth')</label>
                                    <input type="text" value="{{ old('birthday') }}"
                                        class="form-control datepicker selector" name="birthday" id="birthday" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('birthday'))
                                        {{ $errors->first('birthday') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- Citizenship --}}
                                <div class="col-12 col-md-4 pb-4 order-12">
                                    <label for="citizenship">@lang('candidate_data_send.citizenship')</label>
                                    <input type="text" value="{{ old('citizenship') }}" class="form-control"
                                        name="citizenship" id="citizenship" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('citizenship'))
                                        {{ $errors->first('citizenship') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- CV --}}
                                <div class="col-12 col-md-4 pb-4 order-12">
                                    <label>@lang('candidate_data_send.upload_cv')</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control custom-file-input" name="cv" id="cv">
                                        <label class="custom-file-label">@lang('candidate_data_send.chose_cv')</label>
                                        <small class="text-danger error">
                                            @if ($errors->has('cv'))
                                            {{ $errors->first('cv') }}
                                            @endif
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Education row --}}
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.education')</h2>
                        </div>
                        <div class="col-12 repeater-row education_row">
                            <div class="row repeater-item">
                                <div class="col-12 col-md-4 pb-4">
                                    <label for="schoolName">@lang('candidate_data_send.school_name')</label>
                                    <input type="text" class="form-control" name="schoolName[]" id="schoolName"
                                        value="{{ old('schoolName.0') }}" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('schoolName.*'))
                                        {{ $errors->first('schoolName.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-4 pb-4">
                                    <label>@lang('candidate_data_send.qualification')</label>
                                    <input type="text" class="form-control" name="qualification[]" id="qualification"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('qualification.*'))
                                        {{ $errors->first('qualification.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-4 pb-4">
                                    <label>@lang('candidate_data_send.year')</label>
                                    <input type="text" class="yearpicker form-control" name="graduated[]" id="graduated"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('graduated.*'))
                                        {{ $errors->first('graduated.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-4 pb-4">
                                    <label>@lang('candidate_data_send.city')</label>
                                    <input type="text" class="form-control" name="schoolCity[]" id="schoolCity"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('schoolCity.*'))
                                        {{ $errors->first('schoolCity.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-4 pb-4">
                                    <label>@lang('candidate_data_send.country')</label>
                                    <input type="text" class="form-control" name="schoolCountry[]" id="schoolCountry"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('schoolCountry.*'))
                                        {{ $errors->first('schoolCountry.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="delete-row-div d-none">
                                    <span class="delete-row" data-rowclass="education_row">
                                        <svg class="svg-inline--fa fa-minus-circle fa-w-16 delete-row"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="minus-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z">
                                            </path>
                                        </svg><!-- <i class="fas fa-minus-circle delete-row"></i> -->
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="education_row_count" id="education_row_count" value="1">
                                <div class="col-12 col-md-3 pb-4">
                                    <button type="button" class="btn btn-outline-grey copyelement"
                                        data-copyclass="education_row"
                                        data-max="3">@lang('candidate_data_send.add_education') <svg
                                            class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="plus" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                            </path>
                                        </svg><!-- <i class="fas fa-plus"></i> --></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.personal_experiences')</h2>
                        </div>
                        <div class="col-12 repeater-row experience_row">
                            <div class="row repeater-item">
                                {{-- role --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.role_title')</label>
                                    <input type="text" class="form-control" name="position[]" id="experience_task"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('position.*'))
                                        {{ $errors->first('position.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- from --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.work_from')</label>
                                    <input type="text" class="form-control monthpicker" name="from[]"
                                        id="experience_workingperiod_from" required readonly="readonly">
                                    <small class="text-danger error">
                                        @if ($errors->has('from.*'))
                                        {{ $errors->first('from.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- till --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.work_till')</label>
                                    <input type="text" class="form-control monthpicker" name="till[]" id="till" required
                                        readonly="readonly">
                                    <small class="text-danger error">
                                        @if ($errors->has('till.*'))
                                        {{ $errors->first('till.*') }}
                                        @endif
                                    </small>
                                </div>

                                {{-- company name --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.company_name')</label>
                                    <input type="text" class="form-control" name="companyName[]" id="companyName"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('companyName.*'))
                                        {{ $errors->first('companyName.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- city --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.city')</label>
                                    <input type="text" class="form-control" name="companyCity[]" id="companyCity"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('companyCity.*'))
                                        {{ $errors->first('companyCity.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- country --}}
                                <div class="col-12 col-md-6 col-lg-4 pb-4">
                                    <label>@lang('candidate_data_send.country')</label>
                                    <input type="text" class="form-control" name="companyCountry[]" id="companyCountry"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('companyCountry.*'))
                                        {{ $errors->first('companyCountry.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- tasks --}}
                                <div class="col-12 pb-4">
                                    <label>@lang('candidate_data_send.tasks')</label>
                                    <textarea class="form-control" name="tasks[]" id="experience_tasksperformed"
                                        rows="4" required></textarea>
                                    <small class="text-danger error">
                                        @if ($errors->has('tasks.*'))
                                        {{ $errors->first('tasks.*') }}
                                        @endif
                                    </small>
                                </div>
                                {{-- delete button --}}
                                <div class="delete-row-div d-none">
                                    <span class="delete-row" data-rowclass="experience_row">
                                        <svg class="svg-inline--fa fa-minus-circle fa-w-16 delete-row"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="minus-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z">
                                            </path>
                                        </svg><!-- <i class="fas fa-minus-circle delete-row"></i> -->
                                    </span>
                                </div>
                            </div>
                            {{-- copy experience button --}}
                            <div class="row">
                                <input type="hidden" name="experience_row_count" id="experience_row_count" value="1">
                                <div class="col-12 col-md-5 pb-4">
                                    <button type="button" class="btn btn-outline-grey copyelement"
                                        data-copyclass="experience_row"
                                        data-max="3">@lang('candidate_data_send.add_experience') <svg
                                            class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="plus" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                            </path>
                                        </svg><!-- <i class="fas fa-plus"></i> --></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.professional_skills')</h2>
                        </div>
                        <div class="col-12 pb-4">
                            <label>@lang('candidate_data_send.description')</label>
                            <textarea class="form-control" name="professionalSkills" id="proskills_desc" rows="4"
                                required></textarea>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.languages_heading')</h2>
                        </div>
                        <div class="col-12 repeater-row language_row">
                            <div class="row repeater-item">
                                <div class="col-12 col-md-6 pb-4 pr-md-5">
                                    <label>@lang('candidate_data_send.language')</label>
                                    <input type="text" class="form-control" name="language[]" id="language_lang"
                                        required>
                                    <small class="text-danger error">
                                        @if ($errors->has('language.*'))
                                        {{ $errors->first('language.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-6 pb-4 pl-md-5">
                                    <label>@lang('candidate_data_send.lang_level')</label>
                                    <select class="form-control" name="languageLevel[]" id="language_level" required>
                                        <option value="">@lang('candidate_data_send.chose_option')</option>
                                        <option value="Native" @if (old('languageLevel')=='Native' ) selected @endif>
                                            @lang('candidate_data_send.native')</option>
                                        <option value="A1" @if (old('languageLevel')=='Native' ) selected @endif>A1
                                        </option>
                                        <option value="A2" @if (old('languageLevel')=='Native' ) selected @endif>A2
                                        </option>
                                        <option value="B1" @if (old('languageLevel')=='Native' ) selected @endif>B1
                                        </option>
                                        <option value="B2" @if (old('languageLevel')=='Native' ) selected @endif>B2
                                        </option>
                                        <option value="C1" @if (old('languageLevel')=='Native' ) selected @endif>C1
                                        </option>
                                        <option value="C2" @if (old('languageLevel')=='Native' ) selected @endif>C2
                                        </option>
                                        <option value="Low" @if (old('languageLevel')=='Native' ) selected @endif>
                                            @lang('candidate_data_send.low')</option>
                                        <option value="Medium" @if (old('languageLevel')=='Native' ) selected @endif>
                                            @lang('candidate_data_send.medium')</option>
                                        <option value="High" @if (old('languageLevel')=='Native' ) selected @endif>
                                            @lang('candidate_data_send.high')</option>
                                    </select>
                                    <small class="text-danger error">
                                        @if ($errors->has('languageLevel.*'))
                                        {{ $errors->first('languageLevel.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="delete-row-div d-none">
                                    <span class="delete-row" data-rowclass="language_row">
                                        <svg class="svg-inline--fa fa-minus-circle fa-w-16 delete-row"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="minus-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z">
                                            </path>
                                        </svg><!-- <i class="fas fa-minus-circle delete-row"></i> -->
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="language_row_count" id="language_row_count" value="1">
                                <div class="col-12 col-md-3 pb-4">
                                    <button type="button" class="btn btn-outline-grey copyelement"
                                        data-copyclass="language_row"
                                        data-max="3">@lang('candidate_data_send.add_language') <svg
                                            class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="plus" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                            </path>
                                        </svg><!-- <i class="fas fa-plus"></i> --></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.computer_knowledges')</h2>
                        </div>
                        <div class="col-12 repeater-row computerknowledge_row">
                            <div class="row repeater-item">
                                <div class="col-12 col-md-6 pb-4 pr-md-5">
                                    <label>@lang('candidate_data_send.skills')</label>
                                    <input type="text" class="form-control" name="software[]" id="software" required>
                                    <small class="text-danger error">
                                        @if ($errors->has('software.*'))
                                        {{ $errors->first('software.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="col-12 col-md-6 pb-4 pl-md-5">
                                    <label>@lang('candidate_data_send.lang_level')</label>
                                    <select class="form-control" name="softwareKnowledgeLevel[]"
                                        id="computerknowledge_level" required>
                                        <option value="">@lang('candidate_data_send.chose_option')</option>
                                        <option value="Low">@lang('candidate_data_send.low')</option>
                                        <option value="Medium">@lang('candidate_data_send.medium')</option>
                                        <option value="High">@lang('candidate_data_send.high')</option>
                                    </select>
                                    <small class="text-danger error">
                                        @if ($errors->has('softwareKnowledgeLevel.*'))
                                        {{ $errors->first('softwareKnowledgeLevel.*') }}
                                        @endif
                                    </small>
                                </div>
                                <div class="delete-row-div d-none">
                                    <span class="delete-row" data-rowclass="computerknowledge_row">
                                        <svg class="svg-inline--fa fa-minus-circle fa-w-16 delete-row"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="minus-circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z">
                                            </path>
                                        </svg><!-- <i class="fas fa-minus-circle delete-row"></i> -->
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="computerknowledge_row_count" id="computerknowledge_row_count"
                                    value="1">
                                <div class="col-12 col-md-3 pb-4">
                                    <button type="button" class="btn btn-outline-grey copyelement"
                                        data-copyclass="computerknowledge_row"
                                        data-max="4">@lang('candidate_data_send.add_software') <svg
                                            class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="plus" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                            </path>
                                        </svg><!-- <i class="fas fa-plus"></i> --></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">@lang('candidate_data_send.other')</h2>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <label>@lang('candidate_data_send.driving_licence')</label>
                            <input type="text" class="form-control" name="drivingLicence" id="other_drivinglicense"
                                required>
                            <small class="text-danger error">
                                @if ($errors->has('drivingLicence'))
                                {{ $errors->first('drivingLicence') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <label>@lang('candidate_data_send.availability')</label>
                            <input type="text" class="form-control monthpicker" name="availableFrom" id="availableFrom">
                            <small class="text-danger error">
                                @if ($errors->has('availableFrom'))
                                {{ $errors->first('availableFrom') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-12 pb-4">
                            <label>@lang('candidate_data_send.message')</label>
                            <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                            <small class="text-danger error">
                                @if ($errors->has('message'))
                                {{ $errors->first('message') }}
                                @endif
                            </small>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="consentcheck" name="terms" required>
                        <small class="text-danger error">
                            @if ($errors->has('terms'))
                            {{ $errors->first('terms') }}
                            @endif
                        </small>
                        <label class="custom-control-label" for="consentcheck">@lang('candidate_data_send.privacy')
                            <a target="_blank"
                                href="{{ route('privacy-policy', app()->getLocale()) }}">@lang('privacy.privacy-policy')</a></label>
                    </div>
                    <div class="form-error" style="display: none;">
                        <div class="py-3">@lang('candidate_data_send.fill_all')</div>
                    </div>
                    <span class="btn-red-outline">
                        <button type="submit" class="btn btn-red text-uppercase" id="form_submit" name="form_submit"
                            value="client_form" disabled>@lang('candidate_data_send.send') <span class="pl-2"><svg
                                    class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="arrow-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                    </path>
                                </svg><!-- <i class="fas fa-arrow-right"></i> -->
                            </span>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
