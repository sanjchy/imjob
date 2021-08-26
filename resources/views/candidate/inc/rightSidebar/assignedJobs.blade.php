<div class="tab-pane p-0" id="assignedJobs">
    <div class="container p-0">
        <div class="row p-0">
            @include('candidate.inc.modals.assignJobModal')
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-2">
                <div class="card shadow-none">
                    <div class="card-header p-0 m-0 d-flex justify-content-between">
                        <h4 class="py-2 px-3 m-0 font-weight-bold">Recruitment Process</h4>
                        <a class="m-2" data-toggle="modal" data-target="#assignJob">
                            <i class="fi-rr-add fa-lg other-data fa-lg"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 px-2">
                                    <table
                                        class="table table-bordered table-hover table-responsive text-nowrap datatable"
                                        width="100%">
                                        <thead class="bg-light">
                                            <tr>
                                                <th colspan="3" class="text-center font-weight-bold">Job Information
                                                </th>
                                                <th colspan="5" class="text-center font-weight-bold">
                                                    Recruitment Information
                                                </th>
                                                <th colspan="2" class="text-center align-middle font-weight-bold">
                                                    Actions
                                                </th>
                                            </tr>
                                            <tr class="text-dark font-weight-bold text-center">
                                                <th>Position</th>
                                                <th>Company</th>
                                                <th>
                                                    <i class="fa fa-globe fa-lg other-data"></i>
                                                </th>
                                                <th>Status</th>
                                                <th>Timeline</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th>Recruiter</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        @if ($candidate->approved == 1)
                                        <tbody id="assignedJobsTable">
                                            @foreach ($candidate->recruitments as $recruitment)
                                            {{-- @include('job.inc.components.modals.assignedCandidate') --}}
                                            @include('candidate.inc.modals.assignedJobs')
                                            <tr class="text-center" id="recruitment{{ $recruitment->id }}">
                                                <td>
                                                    <a href="{{ route('job.show', $recruitment->job->id) }}">
                                                        {{ ucwords($recruitment->job->requiredProfession) }}
                                                    </a>
                                                </td>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('company.show', $recruitment->job->company->id) }}">
                                                        {{ $recruitment->job->company->name }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="https://{{ $recruitment->job->company->website }}"
                                                        target="_blank">
                                                        <span class="p-1">
                                                            {{ $recruitment->job->company->website }}
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <small class="p-2 candidateRecruitmentStatus{{ $recruitment->id }}">
                                                        {{ ucwords($recruitment->status) }}
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="px-2 py-1" data-toggle="modal"
                                                        data-target="#recruitmentProcess{{ $recruitment->id }}">
                                                        <i class="fi-rr-list-check"></i>
                                                    </a>
                                                </td>
                                                @include('recruitment.modals.timeline')
                                                <td>
                                                    <small
                                                        class="p-1">{{ $recruitment->created_at->format('d.m.Y') }}</small>
                                                </td>
                                                <td>
                                                    <small
                                                        class="p-1">{{ $recruitment->updated_at->format('d.m.Y') }}</small>
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.show', $recruitment->user->id) }}">
                                                        {{ $recruitment->user->name }}
                                                    </a>
                                                </td>
                                                @can('update', $recruitment)
                                                <td>
                                                    <a class="mx-1" data-toggle="modal"
                                                        data-target="#assignedJobModal{{ $recruitment->job->id }}">
                                                        <i class="fi-rr-edit other-data fa-lg"></i>
                                                    </a>
                                                </td>
                                                @endcan
                                                @can('delete', $recruitment)
                                                <td>
                                                    <a class="mx-1" onclick="deleteRecruitment({{ $recruitment->id }})">
                                                        <i class="fi-rr-cross-circle fa-lg"></i>
                                                    </a>
                                                </td>
                                                @endcan
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container -->
</div>
