@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row p-1 d-flex justify-content-center">
        <div class="card shadow-none">
            <div class="card-header">
                <h4 class="pb-0 mb-0">
                    Candidate Requests
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-responsive text-nowrap text-center table-bordered datatable">
                    <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th><i class="fa fa-venus-mars other-data fa-lg"></i></th>
                            <th><i class="fa fa-birthday-cake other-data fa-lg"></i></th>
                            <th><i class="fas fa-map-marked-alt other-data"></i></th>
                            <th><i class="fa fa-envelope other-data fa-lg"></i></th>
                            <th><i class="fa fa-phone other-data fa-lg"></i></th>
                            <th><i class="fas fa-flag other-data fa-lg"></i></th>
                            <th>Citizenship</th>
                            <th>Education</th>
                            </th>
                            <th>Work Experience</th>
                            <th>Skills</th>
                            <th>Languages</th>
                            <th>Application</th>
                            <th>Action</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)
                        <tr id="candidate{{ $candidate->id }}">
                            <td>
                                <a href="{{ route('candidate.show', $candidate->id) }}"
                                    class="text-dark font-weight-bold">
                                    {{ $candidate->firstName . ' ' . $candidate->lastName }}
                                </a>
                            </td>
                            <td>
                                @if (strtolower($candidate->gender) == 'male')
                                <i class="fa fa-male fa-lg text-info"></i>
                                @elseif(strtolower($candidate->gender) == 'female')
                                <i class="fa fa-female fa-lg text-danger"></i>
                                @else
                                <span class="text-muted">Not Defined</span>
                                @endif
                            </td>
                            <td><span>{{ $candidate->birthday ? $candidate->birthday : "Not Defined" }}</span>
                            </td>
                            <td>{{ $candidate->address ?? ""}}</td>
                            <td><a href="mailto:{{ $candidate->email }}"
                                    class="text-info">{{ $candidate->email ?? ""}}</a>
                            </td>
                            <td><span class="">{{ $candidate->phone ?? ""}}</span></td>
                            <td><span class="">{{ $candidate->country ?? ""}}</span></td>
                            <td><span class="">{{ $candidate->citizenship ?? ""}}</span></td>
                            <td>
                                <a data-toggle="modal" data-target="#candidateEducationModal{{ $candidate->id }}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-school other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateEducationModal')
                            <td>
                                <a data-toggle="modal" data-target="#candidateWorkExperienceModal{{ $candidate->id }}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-briefcase other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateExperienceModal')
                            <td>
                                <a data-toggle="modal" data-target="#candidateSkillsModal{{ $candidate->id }}" class="">
                                    <span>
                                        <i class="fi-rr-list-check other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateSkillsModal')
                            <td>
                                <a data-toggle="modal" data-target="#candidateLanguageModal{{ $candidate->id }}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-list-check other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            <td>
                                @if ($candidate->approved == 0)
                                @if ($candidate->recruitments->where("verified",0)->count() > 0)
                                <a
                                    href="{{ route("job.show",App\Models\Job::find($candidate->recruitments->where("verified",0)[0]["job_id"])["id"]) }}">
                                    {{ App\Models\Job::find($candidate->recruitments->where("verified",0)[0]["job_id"])["requiredProfession"] }}
                                </a>
                                @endif
                                @else

                                @endif
                            </td>
                            @include('candidate.inc.modals.candidateLanguageModal')
                            <td>
                                <a class="btn btn-sm btn-outline-success py-1 px-2"
                                    onclick="approveCandidate({{ $candidate->id }})">Approve</a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-outline-danger py-1 px-2"
                                    onclick="declineCandidate({{ $candidate->id }})">Decline</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src=" {{ asset('js/dashboard/approveCandidate.js') }}"></script>
<script src=" {{ asset('js/dashboard/declineCandidate.js') }}"></script>

@endsection
