<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2 bg-white">
    <div class="card shadow-none">
        <div class="card-header p-2 m-0 d-flex justify-content-between">
            <div>
                <h4 class="my-0 py-0 font-weight-bold">
                    {{ $job->requiredProfession ? ucwords($job->requiredProfession) : "Not Defined" }}
                </h4>
                <small class="small text-muted font-italic">
                    @if ($job->company->name)
                    <a href="{{ route("company.show",$job->company->id) }}">{{ $job->company->name }}</a>
                    @else
                    Not Defined
                    @endif
                </small>
            </div>
            <div class="mt-2">
                <h6 class="my-0 py-0 font-weight-bold">
                    {{ $job->corporateInsertion ? ucwords($job->corporateInsertion) : "Not Defined" }}
                </h6>
                <small class="small text-muted font-italic">
                    Corporate Insertion
                </small>
            </div>
        </div>
        {{-- Company Description --}}
        <div class="card-body shadow-none m-0">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2 card shadow-none">
                <small>
                    <p class="blockquote mt-2" style="font-size: 0.92rem;">
                        {{ $job->jobDescription }}
                    </p>
                </small>
            </div>
        </div>
        {{-- Information --}}
        <div class="card-body d-flex justify-content-between">
            <div class="container-fluid p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-none m-2">
                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                <div>
                                    <h5 class="my-0 py-0 font-weight-bold">
                                        Contract Information
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body pt-3 pb-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-document-signed data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->contractDetails ? ucwords($job->contractDetails) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Contract
                                                                    Type</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-euro data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->salary ? $job->salary : "&nbsp;" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Salary</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-time-fast data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->shifts ? $job->shifts : "&nbsp;" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Shifts</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-time-forward-sixty data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->workingHours }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Work Hours
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-comment-alt data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->fixedTerm ? ucwords($job->fixedTerm) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Fixed Terms
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-comment-alt data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->partTime ? $job->partTime : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Part Time
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-none m-2">
                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                <div>
                                    <h5 class="my-0 py-0 font-weight-bold">
                                        Candidate Profile
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body pt-3 pb-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-graduation-cap data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->candidateQualification ? $job->candidateQualification : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Candidate
                                                                    Qualification</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-school data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateEducation ?
                                                            ucwords($job->candidateEducation) : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Candidate
                                                                    Education</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-briefcase data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateWorkExperience ?
                                                            $job->candidateWorkExperience : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Work
                                                                    Experience
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-user data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateAge ? $job->candidateAge : "Not Defined"
                                                            !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Candidate
                                                                    Age
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-id-badge data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateDrivingLicence ?
                                                            ucwords($job->candidateDrivingLicence) :
                                                            "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Driving
                                                                    Licence</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-id-badge data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateMeansOfTransport ?
                                                            ucwords($job->candidateMeansOfTransport) :
                                                            "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Means
                                                                    Of Transport</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-laptop data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateComputerSkills ?
                                                            ucwords($job->candidateComputerSkills) : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Computer
                                                                    Skills</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-users data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->openings ? $job->openings : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Candidates
                                                                    Required
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-flag data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->language ?
                                                            $job->language : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Language
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-flag data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {!! $job->candidateOtherLanguage ?
                                                            $job->candidateOtherLanguage : "Not Defined" !!}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Other
                                                                    Language
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-none m-2">
                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                <div>
                                    <h5 class="my-0 py-0 font-weight-bold">
                                        Accomodation Information
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body pt-3 pb-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-building data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->accomodations ? ucwords($job->accomodations) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Accomodations
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-user data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->accomodationsPays ? ucwords($job->accomodationsPays) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Accomodations Paid By
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-euro data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->accomodationsCosts ? ucwords($job->accomodationsCosts) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Accomodation Price
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-none m-2">
                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                <div>
                                    <h5 class="my-0 py-0 font-weight-bold">
                                        Additional Information
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body pt-3 pb-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-users data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->openings ? $job->openings : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Openings
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-marker data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->placeOfWork ? $job->placeOfWork : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Place of Work
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-time-check data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->avaliableNow ? $job->avaliableNow : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Available Immediate
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-calendar data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->availabilityDate ? date("m.Y",strtotime($job->availabilityDate)) : "Not Defined" }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Availability
                                                                    Date</small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-12 col-md-612col-sm-12 d-flex justify-content-start mb-2 card shadow-none">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-center">
                                                    <p class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                        {{ $job->additionalJobInformation ? $job->additionalJobInformation : "Not Defined" }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Description Of The Staff Request --}}
        <div class="card-body shadow-none m-0">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2 card shadow-none">
                <small>
                    <p class="blockquote mt-2" style="font-size: 0.92rem;">
                        {{ $job->descriptionOfStaffRequest }}
                    </p>
                </small>
            </div>
        </div>
    </div>
</div>
{{-- Assigned Candidates --}}
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2 bg-white">
    <div class="card shadow-none">
        <div class="card-header p-2 m-0 d-flex justify-content-between">
            <div class="">
                <h4 class="my-0 py-0 font-weight-bold">
                    Assigned Candidates
                </h4>
            </div>
            <div>
                <a data-toggle="modal" data-target="#assignCandidate">
                    <i class="fi-rr-add other-data fa-lg"></i>
                </a>
                @include('job.inc.components.modals.assignCandidate')
            </div>
        </div>
        {{-- Company Description --}}
        <div class="card-body shadow-none m-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 shadow-none table-responsive">
                {{-- Candidates Table --}}
                @include('job.inc.components.tabComponents.assignedCandidates')
            </div>
        </div>
    </div>
</div>
