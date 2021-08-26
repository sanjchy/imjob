<div class="tab-pane" id="experience">
    <div class="container-fluid">
        <div class="row">
            @foreach ($candidate->work as $job)
            <div class="col col-xl-4 col-lg-6 col-md-6 col-sm-12" id="work{{ $job->id }}">
                <div class="card shadow-sm m-2">
                    <div class="card-header text-center">
                        <p><span id="workPosition{{ $job->id }}">{{$job->position }}</span><br>
                            <strong class="badge badge-dark"> at </strong><br>
                            <span id="workCompanyName{{ $job->id }}">{{ $job->companyName }}</span>
                        </p>
                    </div>
                    <div class="card-body pb-2">
                        <p><strong>Country</strong> : <small class="badge badge-info"
                                id="workCompanyCountry{{ $job->id }}">{{ $job->companyCountry }}</small>
                        </p>
                        <p><strong>City</strong> : <small class="badge badge-info"
                                id="workCompanyCity{{ $job->id }}">{{ $job->companyCity }}</small></p>
                        <p class="alert alert-light shadow-sm" id="workCompanyTasks{{ $job->id }}">{{ $job->tasks }}</p>
                    </div>
                    <div class="px-2  py-1 d-flex justify-content-between">
                        <div><strong>Start : </strong><small>{{ date('d.m.Y',strtotime($job->from)) }}</small></div>
                        <div><strong>End : </strong><small>{{ date('d.m.Y',strtotime($job->till)) }}</small></div>
                    </div>
                    <div class="card-footer d-flex justify-content-between px-2">
                        @can('update', $job)
                        <a data-toggle="modal" data-target="#editCandidateWorkExperience{{ $job->id }}"
                            class="btn btn-sm btn-outline-info mx-2 d-block">Edit</a>
                        @endcan
                        @can('update', $job)
                        <a data-toggle="modal" data-target="#deleteCandidateWorkExperience{{ $job->id }}"
                            class="btn btn-sm btn-outline-danger mx-2 d-block">Delete</a>
                        @endcan
                        @can('update', $job)
                        @include('candidate.inc.components.modals.editCandidateWorkExperience')
                        @endcan
                        @include('candidate.inc.components.modals.deleteCandidateWorkExperience')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
