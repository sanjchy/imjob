@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row p-1">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <div class="card shadow-none">
                <div class="card-body">
                    <table
                        class="table table-responsive table-hover table-sm text-nowrap text-center table-bordered datatable"
                        width="100%">
                        <thead class="bg-light">
                            <tr>
                                <th colspan="6" class="font-weight-bold">Candidate Information</th>
                                <th colspan="3" class="font-weight-bold">Job Information</th>
                                <th colspan="3" class="font-weight-bold">Company Information</th>
                                <th colspan="4" class="font-weight-bold">Recruitment Information</th>
                                <th colspan="2" class="font-weight-bold">Actions</th>
                            </tr>
                            <tr class="bg-light">
                                <th>ID</th>
                                <th>#</th>
                                <th>Process</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Citizenship</th>
                                <th><i class="fa fa-venus-mars fa-lg other-data"></i></th>
                                <th>Position</th>
                                <th>Location</th>
                                <th>Availability Date</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Industry</th>
                                <th>Status</th>
                                <th>Timeline</th>
                                <th>Assigned</th>
                                <th>Updated</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($recruitments as $recruitment)
                            <tr id="recruitment{{ $recruitment->id }}">
                                @include('job.inc.components.modals.assignedCandidate')
                                <td class="align-middle">{{ $i }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('recruitment.show', $recruitment->id) }}" class="px-2">
                                        <i class="fi-rr-eye other-data fa-lg"></i>
                                    </a>
                                </td>
                                <td class="align-middle" data-toggle="popover" title="{{ $recruitment->status }}">
                                    @switch(ucwords($recruitment->status))
                                    @case("Approve")
                                    <i class="fa fa-dot-circle-o fa-lg text-success" aria-hidden="true"></i>
                                    @break
                                    @case("Approved!")
                                    <i class="fa fa-dot-circle-o fa-lg text-success" aria-hidden="true"></i>
                                    @break
                                    @case("Processing")
                                    <i class="fa fa-dot-circle-o fa-lg text-warning" aria-hidden="true"></i>
                                    @break
                                    @case("Recruitment")
                                    <i class="fa fa-dot-circle-o fa-lg text-primary" aria-hidden="true"></i>
                                    @break
                                    @case("Recruitment Process")
                                    <i class="fa fa-dot-circle-o fa-lg text-info" aria-hidden="true"></i>
                                    @break
                                    @case("Employment")
                                    <i class="fa fa-dot-circle-o fa-lg text-danger" aria-hidden="true"></i>
                                    @break
                                    @default
                                    <i class="fa fa-dot-circle-o fa-lg text-dark" aria-hidden="true"></i>
                                    @endswitch
                                </td>
                                <td class="align-middle">
                                    @if (!public_path('storage/candidate_image/' . $recruitment->candidate->id . '/' .
                                    $recruitment->candidate->image) || !$recruitment->candidate->image)
                                    <img src="{{ asset('storage/candidate/default/noimage.png') }}" alt="user avatar"
                                        class="img-thumbnail" width="60" height="60">
                                    @else
                                    <img src="{{ asset('storage/candidate_image/' . $recruitment->candidate->id . '/' . $recruitment->candidate->image) }}"
                                        alt="user avatar" class="img-thumbnail" width="60" height="60">
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('candidate.show', $recruitment->candidate->id) }}">
                                        {{ ucwords($recruitment->candidate->firstName) . ' ' . ucwords($recruitment->candidate->lastName) }}
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <span class="">{{ ucwords($recruitment->candidate->citizenship) }}</span>
                                </td>
                                <td class="align-middle">
                                    @switch(ucwords($recruitment->candidate->gender))
                                    @case("Male")
                                    <i class="fa fa-male text-primary fa-2x text-primary"></i>
                                    @break
                                    @case("Female")
                                    <i class="fa fa-female text-danger fa-2x text-danger"></i>
                                    @break
                                    @default

                                    @endswitch
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('job.show', $recruitment->job->id) }}">
                                        {{ ucwords($recruitment->job->requiredProfession) }}
                                    </a>
                                </td>
                                <td class="align-middle">
                                    {{ ucwords($recruitment->job->placeOfWork) }}
                                </td>
                                <td class="align-middle">
                                    <small class="font-italic">
                                        @if ($recruitment->job->availabilityDate)
                                        {{ date('m.Y', strtotime($recruitment->job->availabilityDate)) }}
                                        @else
                                        <strong>Not Defined</strong>
                                        @endif
                                    </small>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('company.show', $recruitment->job->company->id) }}">
                                        {{ ucwords($recruitment->job->company->name) }}
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <small class="">
                                        {{ ucwords($recruitment->job->company->country) }}
                                    </small>
                                </td>
                                <td class="align-middle">
                                    <small class="">
                                        {{ ucwords($recruitment->job->company->industry) }}
                                    </small>
                                </td>
                                <td class="align-middle">
                                    <span
                                        class="font-italic candidateRecruitmentStatus{{ $recruitment->id }} text-truncate">
                                        {{ ucwords($recruitment->status) }}
                                    </span>
                                </td>
                                {{-- Recreuitment Process Modal --}}
                                @include('recruitment.modals.timeline')
                                <td class="align-middle">
                                    <a data-toggle="modal" data-target="#recruitmentProcess{{ $recruitment->id }}">
                                        <i class="fi-rr-list-check fa-lg other-data"></i>
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <span class="badge badge-success p-1 font-italic">
                                        {{ $recruitment->created_at->format('d.m.Y') }}
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <span class="badge badge-warning p-1 font-italic">
                                        {{ $recruitment->updated_at->format('d.m.Y') }}
                                    </span>
                                </td>
                                @can('update', $recruitment)
                                <td class="align-middle">
                                    <a class="mx-1" data-toggle="modal"
                                        data-target="#assignedCandidateModal{{ $recruitment->id }}">
                                        <i class="fi-rr-edit other-data fa-lg"></i>
                                    </a>
                                </td>
                                @endcan
                                @can('delete', $recruitment)
                                <td class="align-middle">
                                    <a class="mx-1">
                                        <span onclick="deleteRecruitment({{ $recruitment->id }})">
                                            <i class="fi-rr-cross-circle other-data fa-lg"></i>
                                        </span>
                                    </a>
                                </td>
                                @endcan
                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/recruitment/updateRecruitment.js') }}"></script>
<script src="{{ asset('js/recruitment/deleteRecruitment.js') }}"></script>
@endsection
