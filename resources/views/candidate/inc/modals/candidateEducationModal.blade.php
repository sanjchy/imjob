<!-- Modal -->
<div class="modal hide fade" id="candidateEducationModal{{ $candidate->id }}" tabindex="-1" role="dialog"
    aria-labelledby="candidateEducationModal" aria-hidden="true" data-backdrop="true" data-focus="false">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="candidateeducationModa">Education</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($candidate->schools as $education)
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-0"
                            id="candidateEducation{{ $education->id }}">
                            <div class="card shadow-none m-2 border-imjob">
                                <div class="card-header p-2 m-0 d-flex justify-content-between">
                                    <div class="mx-1">
                                        <p class="my-0 py-0 px-0 font-weight-bold" id="schoolName{{ $education->id }}">
                                            {{ ucwords($education->schoolName) }}
                                        </p>
                                        <small id="qualification{{ $education->id }}"
                                            class="small text-muted font-italic">
                                            School name
                                        </small>
                                    </div>
                                    {{-- <span class="my-2 py-1 d-flex justify-content-between">
                                        @can('update', $education)
                                        <a data-toggle="modal"
                                            data-target="#editCandidateEducationModal{{ $education->id }}">
                                    <i class="fi-rr-edit other-data fa-lg px-1"></i>
                                    </a>
                                    @endcan
                                    @can('delete', $education)
                                    <a data-toggle="modal"
                                        data-target="#deleteCandidateEducationModal{{ $education->id }}">
                                        <i class="fi-rr-cross-circle other-data fa-lg px-1"></i>
                                    </a>
                                    @endcan
                                    @can('update', $education)
                                    @include('candidate.inc.modals.editCandidateEducation')
                                    @endcan
                                    @include('candidate.inc.modals.deleteCandidateEducation')
                                    </span> --}}
                                </div>
                                <div class="card-body pb-4">
                                    <div class="m-0 p-0">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-flag data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $education->schoolCountry ? ucwords($education->schoolCountry) : "Not Defined"}}
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
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-building data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $education->schoolCity ? ucwords($education->schoolCity) : "Not Defined"}}
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
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-graduation-cap fa-2x data"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $education->qualification ? ucwords($education->qualification) : "Not Defined"}}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">
                                                                            Qualification
                                                                        </small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-calendar fa-2x data"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $education->graduated ? ucwords($education->graduated) : "Not Defined"}}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Graduation
                                                                            Date</small>
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
                        </div>
                        @endforeach
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
</div>
