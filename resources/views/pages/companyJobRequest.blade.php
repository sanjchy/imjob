@extends('layouts/layout')
@section('header')
@include('pages.company_data_send.header')
@endsection
@section("content")
<div class="container mb-5 py-1">
    <div class="pt-5"></div>
    <x-company-job-posted />
    <div class="mb-5">
        <div class="py-5 specialform my-3">
            <div class="specialcard p-4">
                <div class="px-3">
                    <h2 class="cv-title mb-0">@lang('company_job_request.company_heading')</h2>
                    <p class="cv-desc">@lang('company_job_request.company_heading_description')</p>
                    <div class="joboffer-divider"></div>
                    <form class="pt-4" id="companyJobRequestForm" class="">
                        <div class="row pb-2">
                            @csrf
                            <input type="hidden" name="company" value="{{ request()->company }}">
                            <div class="col-12">
                                <h2 class="form-heading">@lang('company_job_request.form_heading')</h2>
                            </div>
                            {{-- Required profession --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.required_profession')</label>
                                <input type="text" class="form-control" name="requiredProfession"
                                    id="requiredProfession" required>
                            </div>
                            {{-- Openings --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.openings')</label>
                                <input type="text" class="form-control" name="openings" id="openings" required>
                            </div>
                            {{-- Place of work --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.place_of_work')</label>
                                <input type="text" class="form-control" name="placeOfWork" id="placeOfWork" required>
                            </div>
                            {{-- Salary --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.salary')</label>
                                <input type="text" class="form-control" name="salary" id="salary" required>
                            </div>
                            {{-- Working Hours --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.working_hours')</label>
                                <input type="text" class="form-control" name="workingHours" id="workingHours" required>
                            </div>
                            {{-- Shifts --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.shifts')</label>
                                <input type="text" class="form-control" name="shifts" id="shifts" required>
                            </div>
                            {{-- Industry --}}
                            <div class="col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.industry')</label>
                                <input type="text" class="form-control" name="corporateInsertion"
                                    id="corporateInsertion" required>
                            </div>
                            {{-- Available Immediate --}}
                            {{-- <div class=" col-12 col-md-4 pb-4 d-none">
                                <label>@lang('company_job_request.available_immediate')</label>
                                <input type="text" class="form-control" name="avaliableNow" id="avaliableNow" required>
                            </div> --}}
                            {{-- If no Specify Date --}}
                            {{-- <div class="col-12 col-md-4 pb-4 d-none">
                                <label>@lang('company_job_request.if_no_please_specify_date')</label>
                                <input type="text" class="form-control datepicker" name="availabilityDate"
                                    id="availabilityDate" required>
                            </div> --}}
                            {{-- TASKS --}}
                            <div class="col-10 offset-1 pb-4">
                                <label>@lang('company_job_request.main_tasks')</label>
                                <textarea name="jobDescription" rows="6" class="form-control" required></textarea>
                            </div>
                            {{-- ACCOMODATIONS --}}
                            <div class="col-12">
                                <h3 class="form-heading">@lang('company_job_request.accomodations_heading')</h3>
                            </div>
                            {{-- Accomodations --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.accomodations')</label>
                                <input type="text" class="form-control" name="accomodations" id="accomodations"
                                    required>
                            </div>
                            {{-- Accomodations Pays --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.accomodations_pays')</label>
                                <input type="text" class="form-control" name="accomodationsPays" id="accomodationsPays"
                                    required>
                            </div>
                            {{-- Accomodations Cost --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.accomodations_cost')</label>
                                <input type="text" class="form-control" name="accomodationsCosts"
                                    id="accomodationsCosts" required>
                            </div>
                            {{-- Contract --}}
                            <div class="col-12">
                                <h2 class="form-heading h4">@lang('company_job_request.contract_heading')</h2>
                            </div>
                            {{-- Available Immediate --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.contract_type')</label>
                                <input type="text" class="form-control" name="contractDetails" id="contractDetails"
                                    required>
                            </div>
                            {{-- Fixed TERM --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.contract_fixed')</label>
                                <input type="text" class="form-control" name="fixedTerm" id="fixedTerm" required>
                            </div>
                            {{-- PART TIME --}}
                            {{-- <div class=" col-12 col-md-4 pb-4 d-none">
                                <label>@lang('company_job_request.contract_part_time')</label>
                                <input type="text" class="form-control" name="partTime" id="partTime" required>
                            </div> --}}
                            {{-- Additional Job Information --}}
                            <div class="col-10 offset-1 pb-4">
                                <label>@lang('company_job_request.additional_job_information')</label>
                                <textarea rows="6" class="form-control" name="additionalJobInformation"
                                    id="additionalJobInformation"></textarea>
                            </div>
                            <div class="col-12">
                                <h2 class="form-heading">@lang('company_job_request.candidate_heading')</h2>
                            </div>
                            {{-- Candidate INFORMATION --}}
                            {{-- candidate_qualification --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_qualification')</label>
                                <input type="text" class="form-control" name="candidateQualification"
                                    id="candidateQualification" required>
                            </div>
                            {{-- candidate_age --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_age')</label>
                                <input type="text" class="form-control" name="candidateAge" id="candidateAge" required>
                            </div>
                            {{-- candidate_education --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_education')</label>
                                <input type="text" class="form-control" name="candidateEducation"
                                    id="candidateEducation" required>
                            </div>
                            {{-- candidate_experience --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_experience')</label>
                                <input type="text" class="form-control" name="candidateWorkExperience"
                                    id="candidateWorkExperience" required>
                            </div>
                            {{-- language --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_language')</label>
                                <input type="text" class="form-control" name="language" id="language" required>
                            </div>
                            {{-- Available Immediate --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_other_language')</label>
                                <input type="text" class="form-control" name="candidateOtherLanguage"
                                    id="cnadidateOtherLanguage" required>
                            </div>
                            {{-- Available Immediate --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_skills')</label>
                                <input type="text" class="form-control" name="candidateComputerSkills"
                                    id="candidateComputerSkills" required>
                            </div>
                            {{-- Available Immediate --}}
                            <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_driving_licence')</label>
                                <input type="text" class="form-control" name="candidateDrivingLicence"
                                    id="candidateDrivingLicence" required>
                            </div>
                            {{-- Available Immediate --}}
                            {{-- <div class=" col-12 col-md-4 pb-4">
                                <label>@lang('company_job_request.candidate_means_of_transport')</label>
                                <input type="text" class="form-control" name="candidateMeansOfTransport"
                                    id="candidateMeansOfTransport" required>
                            </div> --}}
                            {{-- Description of the request --}}
                            <div class="col-10 offset-1 pb-4">
                                <label>@lang('company_job_request.description_of_request')</label>
                                <textarea rows="6" class="form-control" name="descriptionOfStaffRequest"
                                    id="descriptionOfStaffRequest"></textarea>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="consentcheck" name="terms">
                            <label class="custom-control-label" for="consentcheck">
                                @lang('company_job_request.privacy')
                                <a target="_blank" href="{{ route('privacy-policy',app()->getLocale()) }}">
                                    @lang('contact_form.privacy')
                                </a>
                            </label>
                        </div>
                        <span class="btn-red-outline">
                            <button type="submit" class="btn btn-red text-uppercase job-save" id="form_submit"
                                name="form_submit" value="client_form" disabled>
                                @lang('company_data_send.send')
                                <span class="pl-2">
                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
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
</div>
@endsection
@section('scripts')
<script src="{{ asset("js/bootstrap-notify-master/bootstrap-notify.min.js") }}"></script>
@include('pages.validation.companyJobRequest')
<script src="{{ asset('js/candidate/jquery.js') }}"></script>
@endsection
