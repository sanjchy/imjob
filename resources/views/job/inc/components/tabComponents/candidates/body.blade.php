<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 card">
        <small>
            <blockquote class="blockquote mt-2" style="font-size: 0.92rem;">
                {{ $job->jobDescription }}
            </blockquote>
        </small>
    </div>
</div>
<div class="row p-3">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 my-2">
        <div class="card shadow-sm">
            <div class="card-header p-0 text-center">
                <div class="card">
                    <p class="p-2 mb-0 font-weight-bold">Contract</p>
                </div>
            </div>
            <div class="card-body">
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Type</span>
                    <small class="pt-1">{!!$job->contractDetails ?? '<span class"text-muted pt-1">N/A</span>'!!}</small>
                </p>
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Salary</span>
                    <small
                        class="align-middle pt-1">{{ $job->salary ?? '<span class"text-muted pt-1">N/A</span>' }}</small>
                </p>
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Shifts</span>
                    <small class="align-middle pt-1">{{ $job->shifts ?? '<span class"text-muted"">N/A</span>' }}</small>
                </p>
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Work Hours</span>
                    <small class="pt-1 text-truncate">
                        {{ $job->workingHours ?? '<span class"text-muted"">N/A</span>' }}
                    </small>
                </p>
                @if ($job->fixedTerm)
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Fixed Term</span>
                    <small class="pt-1">{{ $job->fixedTerm ?? '<span class"text-muted">N/A</span>' }}</small>
                </p>
                @endif
                @if ($job->partTime)
                <p class="d-flex justify-content-start">
                    <span class="badge badge-primary p-2 mr-2 font-weight-bold">Part Time</span>
                    <small class="pt-1">
                        {{ $job->partTime ?? '<span class"text-muted"">N/A</span>' }}
                    </small>
                </p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 my-2">
        <div class="card shadow-sm">
            <div class="card-header p-0 text-center">
                <div class="card">
                    <p class="font-weight-bold p-2 mb-0">Candidate Profile</p>
                </div>
            </div>
            <div class="card-body">
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Qualification</span>
                    <span class="font-weight-bold ml-2 text-muted">{{ $job->candidateQualification  }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Education</span>
                    <span class="font-weight-bold ml-2 text-muted">{{ $job->candidateEducation }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Experience</span>
                    <span class="font-weight-bold ml-2 text-muted">{{ $job->candidateWorkExperience }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Age</span>
                    <span class="font-weight-bold ml-2 text-muted">{{ $job->candidateAge }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Driving Licence</span>
                    <span class="font-weight-bold ml-2 text-muted">{{ $job->candidateDrivingLicence }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Means of Transport</span>
                    <span
                        class="font-weight-bold ml-2 text-muted">{{ $job->candidateMeansOfTransport ?? '<span class"text-muted"">N/A</span>' }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Languages</span>
                    <span
                        class="font-weight-bold ml-2 text-muted">{{ $job->language ?? '<span class"text-muted"">N/A</span>' }}</span>
                </p>
                <p>
                    <span class="badge badge-primary p-2 font-weight-bold">Other Languages</span>
                    <span
                        class="font-weight-bold ml-2 text-muted">{{ $job->candidateOtherLanguage ?? '<span class"text-muted"">N/A</span>' }}</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 my-2">
        <div class="card shadow-sm">
            <div class="card-body">
                <p>Available Immediate
                    @if (strtolower($job->avaliableNow) === 'yes')
                    <span class="badge badge-danger p-2">{{ $job->avaliableNow ?? '' }}</span>
                    @elseif(strtolower($job->avaliableNow) === 'no')
                    <span class="badge badge-success p-2">{{ $job->avaliableNow ?? '' }}</span>
                    @else
                    <span class="text-muted">N/A</span>
                    @endif
                </p>
                <p>
                    Availability Date
                    <span
                        class=" badge badge-info
                        p-2">{{ date('M. Y',strtotime($job->availabilityDate)) ?? '<span class"text-muted"">N/A</span>'}}</span>
                </p>
                <p>Candidates needed :
                    <span
                        class="badge badge-success p-2">{{ $job->openings ?? '<span class"text-muted"">N/A</span>' }}</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 my-2">
        <div class="card shadow-sm border">
            <div class="card-header p-0 m-0 text-center">
                <div class="card m-0 p-0">
                    <p class="font-weight-bold p-2 mb-0">Additional Information</p>
                </div>
            </div>
            <div class="card-body">
                {{$job->additionalJobInformation}}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 my-2">
        <div class="card shadow-sm">
            <div class="card-header p-0 m-0 text-center">
                <div class="card">
                    <p class="font-weight-bold p-2 mb-0">
                        Accomodations
                    </p>
                </div>
            </div>
            <div class="card-body">
                <p>Available:
                    @if ($job->accomodations && strtolower($job->accomodations) == 'yes')
                    <span class="text-success alert-link">{{ ucwords($job->accomodations) }}</span>
                    @else
                    <span class="text-danger alert-link">{{ ucwords($job->accomodations) }}</span>
                    @endif
                </p>
                <p>Paid By
                    : {!! $job->accomodationsPays ? $job->accomodationsPays : '<span class"text-muted"">N/A</span>'!!}
                </p>
                <p>Price :
                    <span>{!! $job->accomodationsCosts ? $job->accomodationsCosts : '<span
                            class"text-muted"">N/A</span>'
                        !!}</span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 card">
        <blockquote class="blockquote mt-2" style="font-size: 0.92rem;">
            {{ $job->descriptionOfStaffRequest }}
        </blockquote>
    </div>
</div>
