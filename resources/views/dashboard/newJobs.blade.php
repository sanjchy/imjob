<div class="card mb-3" id="newCandidatesContainer">
    <h4 class="text-left p-3">New Jobs</h4>
    <div class="container-fluid">
        <div class="row p-0">
            @foreach (App\Models\Job::all()
        ->sortByDesc('id')
        ->take(4)
    as $job)
                <div class="col-md-3 col-lg-6 mb-3 py-0 px-2">
                    <a href="{{ route('job.show', $job->id) }}" class="text-decoration-none">
                        <span>
                            <div class="card m-0 p-0" id="newCandidatesContainer">
                                <div class="card-footer lead border-15 p-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6 px-0 d-flex justify-content-start">
                                                <h6 class="text-left p-0 pt-2">
                                                    <span
                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                        {{ $job->requiredProfession ? $job->requiredProfession : 'Not Defined' }}
                                                    </span>
                                                    <small
                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                        Required Profession
                                                    </small>
                                                </h6>
                                            </div>
                                            <div class="col-sm-6 px-0 d-flex justify-content-end">
                                                <h6 class="p-0 pt-2">
                                                    <span
                                                        class="description-block-text text-break text-dark text-right font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                        {{ $job->company->name ? ucwords($job->company->name) : 'Not Defined' }}
                                                    </span>
                                                    <small
                                                        class="description-block-info font-italic text-right m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                        Company Name
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
                                                                        {{ $job->placeOfWork ? ucwords($job->placeOfWork) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Place Of Work
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="pr-1 pb-0 m-0 d-flex justify-content-end text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-euro mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $job->salary ? $job->salary : 'Not Defined' }}
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
                                                                        <i class="fi-rr-calendar fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $job->avaliableNow ? ucwords($job->avaliableNow) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Available Immediate
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="pr-1 pb-0 m-0 d-flex justify-content-end text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-smartphone mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $job->company->phone ? $job->company->phone : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Phone
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
                                                                            class="fi-rr-document-signed fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $job->contractDetails ? ucwords($job->contractDetails) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Contract Type
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="pr-1 pb-0 m-0 d-flex justify-content-end text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-users mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $job->openings ? $job->openings : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Openings
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
                                            Posted on
                                        </span>
                                        <span class="text-dark">
                                            {{ $job->created_at ? $job->created_at->format('d.m.Y') : 'Not Defined' }}
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
