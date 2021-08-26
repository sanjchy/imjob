<!-- Modal -->
<div class="modal fade" id="jobCandidateModal{{ $job->id }}" tabindex="-1" role="dialog"
    aria-labelledby="jobDescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-dark" id="jobCandidateModalHeader">Required Candidate Profile
                </h5>
            </div>
            <div class="modal-body p-0" id="jobCandidateBody">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="container-fluid p-0 m-0">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
                                                                ucwords($job->candidateEducation) : "Not
                                                                Defined" !!}
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
                                                                $job->candidateWorkExperience : "Not Defined"
                                                                !!}
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
                                                                {!! $job->candidateAge ? $job->candidateAge :
                                                                "Not
                                                                Defined"
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
                                                                ucwords($job->candidateComputerSkills) : "Not
                                                                Defined"
                                                                !!}
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
                                                                {!! $job->openings ? $job->openings : "Not
                                                                Defined" !!}
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
                                                                    <small
                                                                        class="font-weight-bold text-muted text-left">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
