<style>
    #max-height {
        min-height: 91vh;
        max-height: 91vh;
        overflow-y: scroll;
        overflow-x: auto;
    }

    #max-height::-webkit-scrollbar {
        width: 1em;
    }

    #max-height::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #max-height::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid #dee5eb;
    }

</style>
<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 px-1 m-0" class="max-height" id="max-height">
    <div class="card shadow-none p-0 m-0">
        {{-- Name Image Citizenship Gender --}}
        <div class="card-body text-center bg-light p-0 bg-white">
            <div class="container-fluid py-0 px-2">
                <div class="row px-0 mx-0">
                    <div class="col-lg-5 col-md-12 col-sm-12 my-1 p-0 mx-0">
                        <div class="m-0">
                            @if (!file_exists('storage/candidate_image/'.$candidate->id.'/'.$candidate->image) ||
                            !$candidate->image)
                            <img src="{{ asset('storage/candidate/default/noimage.png') }}" alt="user avatar" class=""
                                style="height: 250px;">
                            @else
                            <img src="{{ asset('storage/candidate_image/'.$candidate->id.'/'.$candidate->image) }}"
                                alt="user avatar" class="img-thumbnail m-0" style="height: 250px;">
                            @endif
                        </div>
                        <div class="container-fluid d-flex justify-content-between py-2">
                            <h4 class="my-2 float-left text-dark text-left font-weight-bold">
                                {{ $candidate->firstName . ' ' . $candidate->lastName}}
                            </h4>
                            <div class="mt-1">
                                <a class="btn btn-outline-info py-1 px-2 m-0 data" data-toggle="modal"
                                    data-target="#candidateCV">
                                    CV
                                </a>
                            </div>
                        </div>
                        @include('candidate.inc.modals.profile.cv')
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 mb-1 mt-0 p-1">
                        {{-- Location --}}
                        <div class="container-fluid p-0 m-0">
                            <div class="row d-flex justify-content-between px-0 mx-0">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center px-0">
                                    <div class="card mb-4 shadow-none">
                                        <div class="card-header p-1 m-0 d-flex justify-content-between">
                                            <h5 class="py-2 px-3 my-0 font-weight-bold">Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-flag data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->country) }}
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
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-building data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->city) }}
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
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-envelope data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    <a href="mailto:{{ $candidate->email }}"
                                                                        class="text-dark">
                                                                        {{ $candidate->email }}
                                                                    </a>
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Email</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-smartphone data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->phone) }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Phone</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-id-badge data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->citizenship) }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Citizenship</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fa fa-venus-mars data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->gender) }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Gender</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fa fa-car data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->drivingLicence) }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Driving
                                                                            Licence</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-exclamation data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ ucwords($candidate->availableFrom) }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Notice
                                                                            Period</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fa fa-birthday-cake data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $candidate->birthday ? $candidate->birthday : "Not Defined" }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">
                                                                            Birthday
                                                                        </small>
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
                        {{-- END LOCATION --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-3">
                <div class="card shadow-none">
                    <div class="card-header p-1 m-0 d-flex justify-content-between">
                        <h5 class="py-2 px-3 my-0 font-weight-bold">Candidate Note</h5>
                    </div>
                    <div class="card-body">
                        {{ $candidate->message ? $candidate->message : "Not Defined"}}
                    </div>
                </div>
            </div>
            {{-- Candidate Education --}}
            <div class="container-fluid p-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center px-3">
                        <div class="card mb-4 shadow-none">
                            <div class="card-header p-1 m-0 d-flex justify-content-between">
                                <h5 class="py-2 px-3 my-0 font-weight-bold">Education Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row d-flex p-0 m-0">
                                        @foreach ($candidate->schools as $education)
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0"
                                            id="candidateEducation{{ $education->id }}">
                                            <div class="card shadow-none m-2">
                                                <div class="card-header p-2 m-0 d-flex justify-content-between">
                                                    <div class="mx-1">
                                                        <p class="my-0 py-0 px-0 font-weight-bold"
                                                            id="schoolName{{ $education->id }}">
                                                            {{ ucwords($education->schoolName) }}
                                                        </p>
                                                        <small id="qualification{{ $education->id }}"
                                                            class="small text-muted font-italic">
                                                            School name
                                                        </small>
                                                    </div>
                                                    <span class="my-2 py-1 d-flex justify-content-between">

                                                    </span>
                                                </div>
                                                <div class="card-body pb-4">
                                                    <div class="m-0 p-0">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                                    <div class="my-1">
                                                                        <div
                                                                            class="p-0 m-0 d-flex justify-content-between text-left">
                                                                            <div class="align-middle mr-2 pt-1">
                                                                                <i class="fi-rr-flag data fa-2x"></i>
                                                                            </div>
                                                                            <div class="align-middle text-left pt-1">
                                                                                <p
                                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                    {{ $education->schoolCountry ? ucwords($education->schoolCountry) : "Not Defined"}}
                                                                                </p>
                                                                                <span
                                                                                    class="m-0 p-0 d-flex justify-content-start">
                                                                                    <span
                                                                                        class="d-flex justify-content-start">
                                                                                        <small
                                                                                            class="font-weight-bold text-muted text-left">Country</small>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                                    <div class="my-1">
                                                                        <div
                                                                            class="p-0 m-0 d-flex justify-content-between text-left">
                                                                            <div class="align-middle mr-2 pt-1">
                                                                                <i
                                                                                    class="fi-rr-building data fa-2x"></i>
                                                                            </div>
                                                                            <div class="align-middle text-left pt-1">
                                                                                <p
                                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                    {{ $education->schoolCity ? ucwords($education->schoolCity) : "Not Defined"}}
                                                                                </p>
                                                                                <span
                                                                                    class="m-0 p-0 d-flex justify-content-start">
                                                                                    <span
                                                                                        class="d-flex justify-content-start">
                                                                                        <small
                                                                                            class="font-weight-bold text-muted text-left">City</small>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                                    <div class="my-1">
                                                                        <div
                                                                            class="p-0 m-0 d-flex justify-content-between text-left">
                                                                            <div class="align-middle mr-2 pt-1">
                                                                                <i
                                                                                    class="fi-rr-graduation-cap fa-2x data"></i>
                                                                            </div>
                                                                            <div class="align-middle text-left pt-1">
                                                                                <p
                                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                    {{ $education->qualification ? ucwords($education->qualification) : "Not Defined"}}
                                                                                </p>
                                                                                <span
                                                                                    class="m-0 p-0 d-flex justify-content-start">
                                                                                    <span
                                                                                        class="d-flex justify-content-start">
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
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                                                    <div class="my-1">
                                                                        <div
                                                                            class="p-0 m-0 d-flex justify-content-between text-left">
                                                                            <div class="align-middle mr-2 pt-1">
                                                                                <i
                                                                                    class="fi-rr-calendar fa-2x data"></i>
                                                                            </div>
                                                                            <div class="align-middle text-left pt-1">
                                                                                <p
                                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                    {{ $education->graduated ? ucwords($education->graduated) : "Not Defined"}}
                                                                                </p>
                                                                                <span
                                                                                    class="m-0 p-0 d-flex justify-content-start">
                                                                                    <span
                                                                                        class="d-flex justify-content-start">
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
            </div>
            {{-- Candidate Work Experience --}}
            <div class="container-fluid p-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center px-3">
                        <div class="card mb-4 shadow-none">
                            <div class="card-header p-1 m-0 d-flex justify-content-between">
                                <h5 class="py-2 px-3 my-0 font-weight-bold">Experience Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex p-0 m-0">
                                    @foreach ($candidate->work as $job)
                                    @include('candidate.inc.modals.profile.task')
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0" id="work{{ $job->id }}">
                                        <div class="card shadow-none m-2">
                                            <div class="card-header p-2 m-0 d-flex justify-content-between">
                                                <div>
                                                    <p class="my-0 py-0 font-weight-bold"
                                                        id="workPosition{{ $job->id }}">
                                                        {{ $job->position }}
                                                    </p>
                                                    <small id="workCompanyName{{ $job->id }}"
                                                        class="small text-muted font-italic">
                                                        {{ $job->companyName }}
                                                    </small>
                                                </div>
                                                <span class="my-2 py-1">
                                                    <a>
                                                        <i class="fi-rr-list-check fa-lg mx-1" data-toggle="modal"
                                                            data-target="#candidateTask{{ $job->id }}"></i>
                                                    </a>
                                                    {{-- @can('update', $job) --}}
                                                    {{-- <a data-toggle="modal" data-target="#editCandidateWorkExperience{{ $job->id }}"
                                                    class="btn btn-sm btn-outline-info mx-3 px-2 d-block">
                                                    <i class="fa fa-edit text-info fa-lg"></i>
                                                    </a> --}}
                                                    {{-- <a>
                                                        <i class="fi-rr-edit fa-lg other-data mx-1" data-toggle="modal"
                                                            data-target="#editCandidateWorkExperience{{ $job->id }}"></i>
                                                    </a>
                                                    @endcan
                                                    @can('delete', $job) --}}
                                                    {{-- <a data-toggle="modal"
                                                                            data-target="#deleteCandidateWorkExperience{{ $job->id }}"
                                                    class="btn btn-sm btn-outline-danger mx-3 px-2 d-block">
                                                    <i class="fa fa-trash text-danger fa-lg"></i>
                                                    </a> --}}
                                                    {{-- <a>
                                                        <i class="fi-rr-cross-circle fa-lg other-data mx-1"
                                                            data-toggle="modal"
                                                            data-target="#deleteCandidateWorkExperience{{ $job->id }}"></i>
                                                    </a>
                                                    @endcan
                                                    @can('update', $job)
                                                    @include('candidate.inc.components.modals.editCandidateWorkExperience')
                                                    @endcan
                                                    @can('delete', $job)
                                                    @include('candidate.inc.components.modals.deleteCandidateWorkExperience')
                                                    @endcan --}}
                                                </span>
                                            </div>
                                            <div class="card-body pt-3 pb-1">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                            <div class="my-1">
                                                                <div
                                                                    class="p-0 m-0 d-flex justify-content-between text-left">
                                                                    <div class="align-middle mr-2 pt-1">
                                                                        <i class="fi-rr-flag data fa-2x"></i>
                                                                    </div>
                                                                    <div class="align-middle text-left pt-1">
                                                                        <p
                                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                            {{ $job->companyCountry ? ucwords($job->companyCountry) : "Not Defined"}}
                                                                        </p>
                                                                        <span
                                                                            class="m-0 p-0 d-flex justify-content-start">
                                                                            <span class="d-flex justify-content-start">
                                                                                <small
                                                                                    class="font-weight-bold text-muted text-left">Country</small>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                            <div class="my-1">
                                                                <div
                                                                    class="p-0 m-0 d-flex justify-content-between text-left">
                                                                    <div class="align-middle mr-2 pt-1">
                                                                        <i class="fi-rr-building data fa-2x"></i>
                                                                    </div>
                                                                    <div class="align-middle text-left pt-1">
                                                                        <p
                                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                            {{ $job->companyCity ? ucwords($job->companyCity) : "Not Defined"}}
                                                                        </p>
                                                                        <span
                                                                            class="m-0 p-0 d-flex justify-content-start">
                                                                            <span class="d-flex justify-content-start">
                                                                                <small
                                                                                    class="font-weight-bold text-muted text-left">City</small>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                            <div class="my-1">
                                                                <div
                                                                    class="p-0 m-0 d-flex justify-content-between text-left">
                                                                    <div class="align-middle mr-2 pt-1">
                                                                        <i class="fi-rr-time-check data fa-2x"></i>
                                                                    </div>
                                                                    <div class="align-middle text-left pt-1">
                                                                        <p
                                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                            {{ $job->from ? date("m.Y",strtotime($job->from)) : "Not
                                                                                    Defined"}}
                                                                        </p>
                                                                        <span
                                                                            class="m-0 p-0 d-flex justify-content-start">
                                                                            <span class="d-flex justify-content-start">
                                                                                <small
                                                                                    class="font-weight-bold text-muted text-left">Worked
                                                                                    from</small>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                            <div class="my-1">
                                                                <div
                                                                    class="p-0 m-0 d-flex justify-content-between text-left">
                                                                    <div class="align-middle mr-2 pt-1">
                                                                        <i class="fi-rr-ban data fa-2x"></i>
                                                                    </div>
                                                                    <div class="align-middle text-left pt-1">
                                                                        <p
                                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                            {{ $job->till ? date("m.Y",strtotime($job->till)) : "Not Defined"}}
                                                                        </p>
                                                                        <span
                                                                            class="m-0 p-0 d-flex justify-content-start">
                                                                            <span class="d-flex justify-content-start">
                                                                                <small
                                                                                    class="font-weight-bold text-muted text-left">Worked
                                                                                    untill</small>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
