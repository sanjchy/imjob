<div class="tab-pane" id="education">
    <div class="container-fluid">
        <div class="row">
            @foreach ($candidate->schools as $education)
            <div class="col-lg-4 col-md-4 col-sm-6" id="candidateEducation{{ $education->id }}">
                <div class="card shadow-sm m-2">
                    <div class="card-header text-center">
                        <h4 class="" id="schoolName{{ $education->id }}">{{ $education->schoolName }}</h4>
                    </div>
                    <div class="card-body pb-4">
                        <p class="d-flex justify-content-between">
                            <span class="text-center mr-2">Country</span>
                            <span id="schoolCountry{{ $education->id }}">{{ $education->schoolCountry }}</span>
                        </p>
                        <p class="d-flex justify-content-between">
                            <span class="text-center mr-2">City</span>
                            <span id="schoolCity{{ $education->id }}">{{ $education->schoolCity }}</span>
                        </p>
                        <p class="d-flex justify-content-between">
                            <span class="text-center mr-2">Qualification</span>
                            <span id="qualification{{ $education->id }}">{{ $education->qualification }}</span>
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="text-center mr-2">Graduated</span>
                            <span id="graduated{{ $education->id }}">{{ $education->graduated }}</span>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between px-2">
                        @can('update', $education)
                        <a data-toggle="modal" data-target="#editCandidateEducationModal{{ $education->id }}"
                            class="btn btn-sm btn-outline-info mx-2 d-block">Edit</a>
                        @endcan
                        @can('update', $education)
                        <a data-toggle="modal" data-target="#deleteCandidateEducationModal{{ $education->id }}"
                            class="btn btn-sm btn-outline-danger mx-2 d-block">Delete</a>
                        @endcan
                        @can('update', $education)
                        @include('candidate.inc.modals.editCandidateEducation')
                        @endcan
                        @include('candidate.inc.modals.deleteCandidateEducation')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
