<!-- Modal -->
<div class="modal hide fade" id="candidateWorkExperienceModal{{ $candidate->id }}" tabindex="-1" role="dialog"
    aria-labelledby="candidateWorkExperienceModal" aria-hidden="true" data-backdrop="true" data-focus="false">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="candidateWorkExperience">Work Experience</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($candidate->work as $job)
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-0" id="work{{ $job->id }}">
                            <div class="card shadow-none m-2 border-imjob">
                                <div class="card-header p-2 m-0 d-flex justify-content-between">
                                    <div>
                                        <p class="my-0 py-0 font-weight-bold" id="workPosition{{ $job->id }}">
                                            {{ $job->position }}
                                        </p>
                                        <small id="workCompanyName{{ $job->id }}" class="small text-muted font-italic">
                                            {{ $job->companyName }}
                                        </small>
                                    </div>
                                </div>
                                <div class="card-body pt-3 pb-1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                <div class="my-1">
                                                    <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                        <div class="align-middle mr-2 pt-1">
                                                            <i class="fi-rr-flag data fa-2x"></i>
                                                        </div>
                                                        <div class="align-middle text-left pt-1">
                                                            <p
                                                                class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                {{ $job->companyCountry ? ucwords($job->companyCountry) : "Not Defined"}}
                                                            </p>
                                                            <span class="m-0 p-0 d-flex justify-content-start">
                                                                <span class="d-flex justify-content-start">
                                                                    <small
                                                                        class="font-weight-bold text-muted text-left">Country</small>
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
                                                            <i class="fi-rr-building data fa-2x"></i>
                                                        </div>
                                                        <div class="align-middle text-left pt-1">
                                                            <p
                                                                class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                {{ $job->companyCity ? ucwords($job->companyCity) : "Not Defined"}}
                                                            </p>
                                                            <span class="m-0 p-0 d-flex justify-content-start">
                                                                <span class="d-flex justify-content-start">
                                                                    <small
                                                                        class="font-weight-bold text-muted text-left">City</small>
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
                                                                {{ $job->from ? date("m.Y",strtotime($job->from)) : "Not
                                                                        Defined"}}
                                                            </p>
                                                            <span class="m-0 p-0 d-flex justify-content-start">
                                                                <span class="d-flex justify-content-start">
                                                                    <small
                                                                        class="font-weight-bold text-muted text-left">Worked
                                                                        from</small>
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
                                                            <i class="fi-rr-ban data fa-2x"></i>
                                                        </div>
                                                        <div class="align-middle text-left pt-1">
                                                            <p
                                                                class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                {{ $job->till ? date("m.Y",strtotime($job->till)) : "Not Defined"}}
                                                            </p>
                                                            <span class="m-0 p-0 d-flex justify-content-start">
                                                                <span class="d-flex justify-content-start">
                                                                    <small
                                                                        class="font-weight-bold text-muted text-left">Worked
                                                                        untill</small>
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
                        @endforeach
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
</div>
