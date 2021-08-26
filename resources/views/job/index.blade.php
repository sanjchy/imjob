@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session()->has('companyDeleted'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger" role="alert">
            {{ session('companyDeleted') }}
        </div>
    </div>
    @endif
    <div class="row p-1 d-flex justify-content-center">
        <div class="card shadow-none">
            <div class="card-header">
                <h4 class="pb-0 mb-0">
                    Jobs
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-hover table-bordered text-nowrap datatable">
                    <thead class="bg-light">
                        <tr class="text-dark font-weight-bold text-center">
                            <th>ID</th>
                            <th scope="col">Position</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Website</th>
                            <th scope="col">Place of Work</th>
                            <th>Description</th>
                            <th>Candidate</th>
                            <th>Additional <span class="text-info">Info</span></th>
                            <th>Request Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($jobs as $job)
                        <tr class="text-center">
                            <td>
                                {{ $i }}
                            </td>
                            <td class="text-dark">
                                <a
                                    href="{{ route('job.show', $job->id, app()->getLocale()) }}">{{ $job->requiredProfession }}</a>
                            </td>
                            <td>
                                <a href="{{ route('company.show', $job->company->id) }}" class="">
                                    <span>
                                        {{ $job->company->name }}
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="http://{{ $job->company->website }}" class=""
                                    target="_blank">{{ $job->company->website }}
                                </a>
                            </td>
                            <td class="">{{ $job->placeOfWork }}</td>
                            {{-- <td>{{ $job->salary }}</td> --}}
                            {{-- <td><span class="badge badge-info p-2">{{ $job->workingHours }}</span></td> --}}
                            {{-- <td>{{ $job->shifts }}</td> --}}
                            {{-- <td>
                                    @if (strtolower($job->avaliableNow) == 'yes')
                                    <span class="badge badge-success p-2">{{ ucwords($job->avaliableNow) }}</span>
                            @else
                            <span class="badge badge-danger p-2">{{ ucwords($job->avaliableNow) }}</span>
                            @endif
                            </td>
                            <td>
                                @if (isset($job->availabilityDate) && !empty($job->availabilityDate))
                                {{ date('M. Y',strtotime($job->availabilityDate)) ?? '<span class="text-muted">Not Defined</span>'}}
                                @else
                                <span class="text-muted">Not Defined</span>
                                @endif
                            </td> --}}
                            <td>
                                <a class="showJobDescription p-0" data-toggle="modal" data-target="#jobDescriptionModal"
                                    data-body="{{ $job->jobDescription }}" data-id="{{ $job->id }}"
                                    data-header="{{ $job->requiredProfession }}">
                                    <i class="fi-rr-list-check other-data fa-lg"></i>
                                </a>
                            </td>
                            @include('job.modals.jobDescriptionModal')
                            {{-- Candidate --}}
                            <td>
                                <a class="showJobCandidate" data-toggle="modal"
                                    data-target="#jobCandidateModal{{ $job->id }}">
                                    <i class="fi-rr-user other-data fa-lg"></i>
                                </a>
                            </td>
                            @include('job.modals.jobCandidateModal')
                            {{-- End Candidate --}}
                            {{-- Accomodations --}}
                            {{-- <td>
                                    @if (strtolower($job->accomodations) == 'yes')
                                    <a data-toggle="modal" data-target="#jobAccomodationsModal"
                                        class="btn btn-sm btn-outline-success showJobAccomodations"
                                        data-job="{{ $job->requiredProfession }}"
                            data-pays="{{ $job->accomodationsPays }}"
                            data-price="{{ $job->accomodationsCosts }}">
                            <span>Preview</span>
                            </a>
                            @else
                            <a data-toggle="modal" data-target="#jobAccomodationsModal"
                                class="btn btn-sm btn-outline-danger showJobAccomodations"
                                data-job="{{ $job->requiredProfession }}" data-pays="{{ $job->accomodationsPays }}"
                                data-price="{{ $job->accomodationsCosts }}">
                                <span>Preview</span>
                            </a>
                            @endif
                            </td>
                            @include('job.modals.jobAccomodationsModal') --}}
                            {{-- End Accomodations --}}
                            {{-- <td>
                                    <span class="badge badge-warning">{{ ucwords($job->corporateInsertion) }}</span>
                            </td> --}}
                            {{-- <td>
                                    <a class="btn btn-sm btn-outline-success jobShowContractDetails" data-toggle="modal"
                                        data-target="#jobContractModal" data-details="{{ $job->contractDetails }}"
                            data-fixed="{{ $job->fixedTerm }}" data-part="{{ $job->partTime }}">Preview</a>
                            </td>
                            @include('job.modals.jobContract') --}}
                            <td>
                                <a class="showJobAdditionalInformation" data-toggle="modal"
                                    data-target="#additionalInformationModal{{ $job->id }}">
                                    <i class="fi-rr-list-check fa-lg other-data"></i>
                                </a>
                            </td>
                            @include('job.modals.additionalInformationModal')
                            <td>
                                <a class="showJobDescriptionOfTheStaffRequest" data-toggle="modal"
                                    data-target="#jobDescriptionOfTheStaffRequestModal{{ $job->id }}">
                                    <i class="fi-rr-list-check fa-lg other-data"></i>
                                </a>
                            </td>
                            @include('job.modals.jobDescriptionOfTheStaffRequest')
                            {{-- <td class="text-success">{{ $job->openings }}</td> --}}
                            <td>
                                <a href="" class="deleteJob text-danger" data-job="{{ $job->id }}">
                                    <i class="fa fa-minus-circle fa-lg"></i>
                                </a>
                            </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).on("click", ".showJobDescription", function (e) {

        e.preventDefault();

        var _self = $(this);

        var header = _self.data('header');
        var body = _self.data('body');
        $("#jobDescriptionModalHeader").html(header);
        $("#jobDescriptionModalBody").html(body);
        $(_self.attr('href')).modal('show');
    });

</script>
<script>
    $(document).on("click", ".showJobAccomodations", function (e) {

        e.preventDefault();

        var _self = $(this);

        var job = _self.data('job');
        var pays = _self.data('pays');
        var price = _self.data('price');
        $("#jobAccomodationsModalHeader").html(job);
        $("#jobAccomodationsPaidBy").html(pays);
        $("#jobAccomodationsPrice").html(price);
        $(_self.attr('href')).modal('show');
    });

</script>

<script>
    $(document).on("click", ".showJobCandidate", function (e) {

        e.preventDefault();

        var _self = $(this);

        var qualification = _self.data('qualification');
        var age = _self.data('age');
        var education = _self.data('education');
        var work = _self.data('work-experience');
        var language = _self.data('language');
        var otherLanguage = _self.data('other-language');
        var computerSkills = _self.data('computer-skills');
        var drivingLicence = _self.data('driving-licence');
        var transport = _self.data('means-of-transport');
        $("#jobCandidateQualification").html(qualification);
        $("#jobCandidateAge").html(age);
        $("#jobCandidateEducation").html(education);
        $("#jobCandidateWorkExperience").html(work);
        $("#jobCandidateLanguage").html(language);
        $("#jobCandidateOtherLanguage").html(otherLanguage);
        $("#jobCandidateComputerSkills").html(computerSkills);
        $("#jobCandidateDrivingLicence").html(drivingLicence);
        $("#jobCandidateMeansOfTransport").html(transport);
        $(_self.attr('href')).modal('show');
    });

</script>

<script>
    $(document).on("click", ".showJobDescriptionOfTheStaffRequest", function (e) {

        e.preventDefault();

        var _self = $(this);
        var body = _self.data('body');
        console.log(body);
        $("#jobDescriptionOfTheStaffRequestModalBody").html(body);
        $(_self.attr('href')).modal('show');
    });

</script>

<script>
    $(document).on("click", ".showJobAdditionalInformation", function (e) {

        e.preventDefault();

        var _self = $(this);
        var body = _self.data('body');
        console.log(body);
        $("#jobAdditionalInformationModalBody").html(body);
        $(_self.attr('href')).modal('show');
    });

</script>

<script>
    $(document).on("click", ".jobShowContractDetails", function (e) {

        e.preventDefault();

        var _self = $(this);
        var details = _self.data('details');
        var fixed = _self.data('fixed');
        var part = _self.data('part');
        $("#jobContractModalHeader").html(details);
        $("#jobContractFixedTerm").html(fixed);
        $("#jobContractPartTime").html(part);
        $(_self.attr('href')).modal('show');
    });

</script>
@endsection
