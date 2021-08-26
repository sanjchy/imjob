{{-- Experience row start --}}
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
    <div class="card shadow-none border-imjob">
        <div class="bg-imjob p-0 m-0 d-flex justify-content-between">
            <h4 class="pb-2 pt-2 px-2 m-0 font-weight-bolder text-dark">
                Work Experience
            </h4>
            <a class="d-none p-2 align-middle" data-toggle="modal" data-target="#addExperience">
                <i class="fi-rr-add text-success fa-lg"></i>
            </a>
            @include('candidate.inc.modals.profile.experience')
        </div>
        <div class="row d-flex p-0 m-0 bg-imjob">
            @foreach ($candidate->work as $job)
            @include('candidate.inc.modals.profile.task')
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
                        <span class="my-2 py-1 no-print">
                            <a>
                                <i class="fi-rr-list-check fa-lg mx-1" data-toggle="modal"
                                    data-target="#candidateTask{{ $job->id }}"></i>
                            </a>
                            @can('update', $job)
                            {{-- <a data-toggle="modal" data-target="#editCandidateWorkExperience{{ $job->id }}"
                            class="btn btn-sm btn-outline-info mx-3 px-2 d-block">
                            <i class="fa fa-edit text-info fa-lg"></i>
                            </a> --}}
                            <a>
                                <i class="fi-rr-edit fa-lg other-data mx-1" data-toggle="modal"
                                    data-target="#editCandidateWorkExperience{{ $job->id }}"></i>
                            </a>
                            @endcan
                            @can('delete', $job)
                            {{-- <a data-toggle="modal"
                                            data-target="#deleteCandidateWorkExperience{{ $job->id }}"
                            class="btn btn-sm btn-outline-danger mx-3 px-2 d-block">
                            <i class="fa fa-trash text-danger fa-lg"></i>
                            </a> --}}
                            <a>
                                <i class="fi-rr-cross-circle fa-lg other-data mx-1" data-toggle="modal"
                                    data-target="#deleteCandidateWorkExperience{{ $job->id }}"></i>
                            </a>
                            @endcan
                            @can('update', $job)
                            @include('candidate.inc.components.modals.editCandidateWorkExperience')
                            @endcan
                            @can('delete', $job)
                            @include('candidate.inc.components.modals.deleteCandidateWorkExperience')
                            @endcan
                        </span>
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
                                                <p class="p-0 m-0 font-weight-bold d-flex justify-content-start">
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
                                                <p class="p-0 m-0 font-weight-bold d-flex justify-content-start">
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
                                                <p class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                    {{ $job->from ? date("m.Y",strtotime($job->from)) : "Not
                                                    Defined"}}
                                                </p>
                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                    <span class="d-flex justify-content-start">
                                                        <small class="font-weight-bold text-muted text-left">Worked
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
                                                <p class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                    {{ $job->till ? date("m.Y",strtotime($job->till)) : "Not Defined"}}
                                                </p>
                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                    <span class="d-flex justify-content-start">
                                                        <small class="font-weight-bold text-muted text-left">Worked
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
    </div>
</div>
{{--Experience row end --}}
