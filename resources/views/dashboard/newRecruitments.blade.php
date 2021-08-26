<div class="card mb-3" id="newCandidatesContainer">
    <h4 class="text-left p-3">New Recruitments</h4>
    <div class="container-fluid">
        <div class="row p-0">
            @foreach (App\Models\Recruitment::all()
        ->sortByDesc('id')
        ->take(4)
    as $recruitment)
                <div class="col-md-3 col-lg-6 mb-3 py-0 px-2">
                    <a href="{{ route('recruitment.show', $recruitment->id) }}" class="text-decoration-none">
                        <span>
                            <div class="card m-0 p-0" id="newCandidatesContainer">
                                <div class="card-footer lead border-15 p-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6 px-0 d-flex justify-content-start">
                                                <h6 class="p-0 pt-2">
                                                    <span
                                                        class="description-block-text text-break text-dark text-right font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                        {{ $recruitment->candidate ? ucwords($recruitment->candidate->firstName . ' ' . $recruitment->candidate->lastName) : 'Not Defined' }}
                                                    </span>
                                                    <small
                                                        class="description-block-info font-italic text-right m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                        {{ $recruitment->candidate->citizenship ? ucwords($recruitment->candidate->citizenship) : 'Not Defined' }}

                                                    </small>
                                                </h6>
                                            </div>
                                            <div class="col-sm-6 px-0 d-flex justify-content-end">
                                                <h6 class="text-left p-0 pt-2">
                                                    <span
                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                        {{ $recruitment->job->requiredProfession ? $recruitment->job->requiredProfession : 'Not Defined' }}
                                                    </span>
                                                    <small
                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                        {{ $recruitment->job->company->name ? ucwords($recruitment->job->company->name) : 'Not Defined' }}
                                                    </small>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col px-0">
                                            <div class="card-block py-3 pl-1" id="newCandidateDescriptionBlock">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="">
                                                                        <i class="fi-rr-flag fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->candidate->country ? ucwords($recruitment->candidate->country) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Current Residence
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-flag mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0 pr-2">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->job->salary ? $recruitment->job->salary : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Salary
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="">
                                                                        <i
                                                                            class="fa fa-birthday-cake fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->candidate->birthday ? date('d.m.Y', strtotime($recruitment->candidate->birthday)) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Birthday
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-user mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->job->candidateAge ? $recruitment->job->candidateAge : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Candidate Age
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="">
                                                                        <i
                                                                            class="fi-rr-graduation-cap fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->candidate->schools->first->qualification ? ucwords($recruitment->candidate->schools->first()->qualification) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Qualification
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i
                                                                            class="fi-graduation-cap mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $recruitment->job->candidateEducation ? ucwords($recruitment->job->candidateEducation) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Candidate Education
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer lead">
                                    <p class="pb-0 mb-0">
                                        <span class="text-dark font-italic">
                                            Matched on
                                        </span>
                                        <span class="text-dark">
                                            {{ $recruitment->created_at ? $recruitment->created_at->format('d.m.Y') : 'Not Defined' }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
