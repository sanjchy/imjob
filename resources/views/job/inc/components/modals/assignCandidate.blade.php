<!-- Modal -->
<div class="modal hide fade" id="assignCandidate" tabindex="1400" role="dialog"
    aria-labelledby="assigncandidateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="assigncandidateModalLabel">Assign Candidates to
                    <strong>{{ ucwords($job->requiredProfession) }}</strong>
                </h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <table class="table text-nowrap table-hover table-bordered table-responsive datatable">
                                <thead class="">
                                    <tr>
                                        <th>Name</th>
                                        <th><i class="fa fa-venus-mars other-data fa-lg"></i></th>
                                        <th><i class="fa fa-birthday-cake other-data fa-lg"></i></th>
                                        <th><i class="fi-rr-marker fa-lg other-data"></i></th>
                                        <th><i class="fi-rr-envelope other-data fa-lg"></i></th>
                                        <th><i class="fi-rr-smartphone other-data fa-lg"></i></th>
                                        <th><i class="fas fa-flag-usa other-data fa-lg"></i></th>
                                        <th>Citizenship</th>
                                        <th><i class="fas fa-university other-data fa-lg"></i></th>
                                        <th><i class="fas fa-briefcase other-data fa-lg"></i></th>
                                        <th>Skills</th>
                                        <th><i class="fas fa-language other-data fa-lg"></i></th>
                                        <th><span class="p-2">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody class="assignCandidateBody">
                                    @foreach (\App\Models\Candidate::all() as $candidate)
                                        @if (!\App\Models\Recruitment::where('candidate_id', $candidate->id)
        ->where('job_id', $job->id)
        ->first())
                                            <tr class="text-center" id="candidate{{ $candidate->id }}">
                                                <td>
                                                    <a href="{{ route('candidate.show', $candidate->id) }}"
                                                        class="text-primary">
                                                        {{ $candidate->firstName . ' ' . $candidate->lastName }}asdasdasdsadlkjhsadsjahdlasjdh
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
                                                <td><small>{{ date('d.m.Y', strtotime($candidate->birthday)) }}</small>
                                                </td>
                                                <td>{{ $candidate->address }}</td>
                                                <td>
                                                    <a href="mailto:{{ $candidate->email }}"
                                                        class="btn btn-sm btn-outline-danger p-1 shadow-sm">{{ $candidate->email }}</a>
                                                </td>
                                                <td><small class="p-1">{{ $candidate->phone }}</small>
                                                </td>
                                                <td><small class="p-1">{{ $candidate->country }}</small>
                                                </td>
                                                <td><small class="p-1">{{ $candidate->citizenship }}</small>
                                                </td>
                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#candidateEducationModal{{ $candidate->id }}"
                                                        class="btn btn-sm btn-outline-info p-1">
                                                        <span>Check</span>
                                                    </a>
                                                    @include('candidate.inc.modals.candidateEducationModal')
                                                </td>
                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#candidateWorkExperienceModal{{ $candidate->id }}"
                                                        class="btn btn-sm btn-outline-info p-1">
                                                        <span>Check</span>
                                                    </a>
                                                    @include('candidate.inc.modals.candidateExperienceModal')
                                                </td>
                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#candidateSkillsModal{{ $candidate->id }}"
                                                        class="btn btn-sm btn-outline-info p-1">
                                                        <span>Check</span>
                                                    </a>
                                                    @include('candidate.inc.modals.candidateSkillsModal')
                                                </td>
                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#candidateLanguageModal{{ $candidate->id }}"
                                                        class="btn btn-sm btn-outline-info p-1">
                                                        <span>Check</span>
                                                    </a>
                                                    @include('candidate.inc.modals.candidateLanguageModal')
                                                </td>
                                                <td class="d-flex text-center">
                                                    <div class="mx-auto">
                                                        <a class="assignCandidate"
                                                            onclick="assignCandidate({{ $job->id }},{{ $candidate->id }})">
                                                            <span>
                                                                <i class="fi-rr-check other-data fa-lg"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
