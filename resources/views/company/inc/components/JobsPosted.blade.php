<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white">
    <div class="card shadow-none">
        {{-- Job header --}}
        <div class="card-header p-2 m-0 d-flex justify-content-between bg-light">
            <div>
                <h5 class="my-0 py-0 font-weight-bold">
                    Jobs
                </h5>
                <small class="small text-muted font-italic">
                    Job's information
                </small>
            </div>
            <div class="p-2 m-0">
                @include('company.inc.components.modals.generateJobRequestUrl')
                <a data-toggle="modal" data-target="#generateJobRequestUrl" class="mr-2">
                    <i class="fi-rr-link other-data fa-lg"></i>
                </a>
                {{-- Job Posting Modal --}}
                @include('company/inc/JobPost')
                <a data-toggle="modal" data-target=".companyAddJob" type="button">
                    <i class="fi-rr-add fa-lg other-data"></i>
                </a>
            </div>
        </div>
        <div class="card-body px-1">
            <div class="container-fluid">
                <div class="row">
                    @if ($company->jobs->count() == 0)
                    <div class="container">
                        <div class="alert alert-dismissable alert-warning shadow-sm mb-0">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <span>No Jobs Posted</span>
                        </div>
                    </div>
                    @else
                    @foreach ($company->jobs as $job)
                    {{-- Job's Posted --}}
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-none m-2">
                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                <div>
                                    <p class="my-0 py-0 font-weight-bold">
                                        {!! $job->requiredProfession ? ucwords($job->requiredProfession) : "&nbsp;" !!}
                                    </p>
                                    <small class="small text-muted font-italic">
                                        Role
                                    </small>
                                </div>
                                <span class="my-2 py-1">
                                    <a class="mx-1">
                                        <i class="fi-rr-list-check fa-lg other-data mx-1" data-toggle="modal"
                                            data-target="#jobTask{{ $job->id }}"></i>
                                        @include('company.inc.components.modals.jobTask')
                                    </a>
                                    <a class="mx-1" href="{{ route("job.show",$job->id) }}"
                                        style="text-decoration:none;">
                                        <i class="fi-rr-eye fa-lg other-data mx-1"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="card-body pt-3 pb-1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div
                                            class="col-xl-12 col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-document-signed data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->contractDetails }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start small">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Contract Type
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-12 col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
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
                                                            <span class="d-flex justify-content-start small">
                                                                <small class="font-weight-bold text-muted text-left">
                                                                    Salary
                                                                </small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-12 col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-users data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ $job->candidates->count() }}
                                                        </p>
                                                        <span class="m-0 p-0 d-flex justify-content-start">
                                                            <span class="d-flex justify-content-start">
                                                                <small
                                                                    class="font-weight-bold text-muted text-left">Candidates
                                                                    Assigned</small>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
