@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row p-1 d-flex justify-content-center">
        <div class="card shadow-none">
            <div class="card-header">
                <h4 class="pb-0 mb-0">
                    Candidates
                </h4>
            </div>
            <div class="card-body">
                <div class="container-fluid mx-0 my-2">
                    @if (session()->has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-dismissable {{ session('type') }} shadow-sm mb-0">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <span>{!! session('message') !!}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <table class="table table-hover table-responsive text-nowrap text-center table-bordered datatable">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($candidates as $candidate)
                        <tr>
                            <td>
                                {{ $i }}
                            </td>
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
                            <td><span>{{$candidate->birthday ? $candidate->birthday : "Not Defined" }}</span></td>
                            <td>{{ $candidate->address }}</td>
                            <td><a href="mailto:{{ $candidate->email }}" class="text-info">{{ $candidate->email }}</a>
                            </td>
                            <td><span class="">{{ $candidate->phone }}</span></td>
                            <td><span class="">{{ $candidate->country }}</span></td>
                            <td><span class="">{{ $candidate->citizenship }}</span></td>
                            <td>
                                <a data-toggle="modal" data-target="#candidateEducationModal{{ $candidate->id ?? ""}}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-school other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateEducationModal')
                            <td>
                                <a data-toggle="modal"
                                    data-target="#candidateWorkExperienceModal{{ $candidate->id ?? ""}}" class="">
                                    <span>
                                        <i class="fi-rr-briefcase other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateExperienceModal')
                            <td>
                                <a data-toggle="modal" data-target="#candidateSkillsModal{{ $candidate->id ?? ""}}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-list-check other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateSkillsModal')
                            <td>
                                <a data-toggle="modal" data-target="#candidateLanguageModal{{ $candidate->id ?? ""}}"
                                    class="">
                                    <span>
                                        <i class="fi-rr-list-check other-data fa-lg"></i>
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="" class="deleteCandidate" data-candidate="{{ $candidate->id ?? ""}}">
                                    <i class="fa fa-minus-circle fa-lg text-danger"></i>
                                </a>
                            </td>
                            @include('candidate.inc.modals.candidateLanguageModal')
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
@endsection
