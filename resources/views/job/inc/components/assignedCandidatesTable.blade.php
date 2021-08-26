@foreach ($job->recruitments as $recruitment)
@include('job.inc.components.modals.assignedCandidate')
<tr id="recruitment{{ $recruitment->id }}">
    <td>
        <a href="{{ route("recruitment.show",$recruitment->id) }}">
            {{ $recruitment->id }}
        </a>
    </td>
    <td class="text-center p-1 m-0">
        <img src="{{ $recruitment->candidate->image ? asset("storage/candidate_image/".$recruitment->candidate->id."/".$recruitment->candidate->image) : asset("storage/candidate/default/noimage.png") }}"
            alt="src" class="img-thumbnail" width="60" height="60">
    </td>
    <td class="text-center align-middle">
        <a class="" href="{{ route("candidate.show",$recruitment->candidate->id) }}">
            {{ ucwords($recruitment->candidate->firstName) . " " . ucwords($recruitment->candidate->lastName) }}</a>
    </td>
    <td class="text-center align-middle">
        <small class="p-1">{{ ucwords($recruitment->candidate->citizenship) }}</small>
    </td>
    <td class="text-center align-middle">
        <i
            class="fa {{ ucwords($recruitment->candidate->gender) == "Male" ? "fa-male text-primary" : "fa-female text-danger" }} fa-lg"></i>
    </td>
    <td class="text-center align-middle">
        <strong class="p-1 candidateRecruitmentStatus{{ $recruitment->id }}">
            <em>
                {{ ucwords($recruitment->status) }}
            </em>
        </strong>
    </td>
    @include('recruitment.modals.timeline')
    <td class="text-center align-middle">
        <a href="#" class="" data-toggle="modal" data-target="#recruitmentProcess{{ $recruitment->id }}">
            <i class="fi-rr-list-check other-data fa-lg"></i>
        </a>
    </td>
    <td class="text-center align-middle">
        <span class="badge badge-success">
            {{ $recruitment->created_at->format('d.m.Y') }}
        </span>
    </td>
    <td class="text-center align-middle">
        <span class="badge badge-warning">
            {{ $recruitment->updated_at->format('d.m.Y') }}
        </span>
    </td>
    <td class="text-center align-middle">
        <a href="{{ route('user.show', $recruitment->user_id) }}"
            class="text-secondary">{{ $recruitment->user->name }}</a>
    </td>
    @can('update', $recruitment)
    <td class="text-center align-middle">
        <a class="mx-1" data-toggle="modal" data-target="#assignedCandidateModal{{ $recruitment->id }}">
            <i class="fi-rr-edit other-data fa-lg"></i>
        </a>
    </td>
    @endcan
    @can('update', $recruitment)
    <td class="text-center align-middle">
        <a class="mx-1">
            <span onclick="deleteRecruitment({{ $recruitment->id }})">
                <i class="fi-rr-cross-circle other-data fa-lg"></i>
            </span>
        </a>
    </td>
    @endcan
</tr>
@endforeach
