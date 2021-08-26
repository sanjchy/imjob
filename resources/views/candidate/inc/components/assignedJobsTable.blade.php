@foreach ($candidate->recruitments as
$recruitment)
{{-- @include('job.inc.components.modals.assignedCandidate') --}}
{{-- @include('candidate.inc.modals.assignedJobs') --}}
<tr class="text-center" id="recruitment{{ $recruitment->id }}">
    <td>
        <a href="{{ route("job.show",$recruitment->job->id) }}">
            {{ ucwords($recruitment->job->requiredProfession) }}
        </a>
    </td>
    </td>
    <td>
        <a href="{{ route("company.show",$recruitment->job->company->id) }}">
            {{ $recruitment->job->company->name }}
        </a>
    </td>
    <td>
        <a href="https://{{ $recruitment->job->company->website }}" target="_blank">
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
        <a href="#" class="px-2 py-1" data-toggle="modal" data-target="#recruitmentProcess{{ $recruitment->id }}">
            <i class="fi-rr-list-check"></i>
        </a>
    </td>
    @include('recruitment.modals.timeline')
    <td>
        <small class="p-1">{{ $recruitment->created_at->format("d.m.Y") }}</small>
    </td>
    <td>
        <small class="p-1">{{ $recruitment->updated_at->format("d.m.Y") }}</small>
    </td>
    <td>
        <a href="{{ route("user.show",$recruitment->user->id) }}">
            {{ $recruitment->user->name }}
        </a>
    </td>
    @can('update', $recruitment)
    <td>
        <a class="mx-1" data-toggle="modal" data-target="#assignedJobModal{{ $recruitment->job->id }}">
            <i class="fi-rr-edit other-data fa-lg"></i>
        </a>
    </td>
    @endcan
    @can('update', $recruitment)
    <td>
        <a class="mx-1" onclick="deleteRecruitment({{ $recruitment->id }})">
            <i class="fi-rr-cross-circle fa-lg"></i>
        </a>
    </td>
    @endcan
</tr>
@endforeach
