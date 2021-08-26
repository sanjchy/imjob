<div class="card border-15 p-0 mb-3">
    <h4 class="text-left p-3">New Candidates</h4>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    @foreach (App\Models\Candidate::where('approved', 1)
                    ->get()
                    ->sortByDesc('id')
                    ->take(4)
                    as $candidate)
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-3 py-0 px-2">
                        <a href="{{ route('candidate.show', $candidate->id) }}" class="text-decoration-none">
                            <span>
                                <div class="card m-0 p-0" id="newCandidatesContainer">
                                    <div class="card-footer lead border-15 px-2">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div
                                                    class="col-sm-6 col-md-6 col-lg-6 col-xl-12 my-2 px-0 d-flex align-content-center rounded">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col px-0">
                                                                <div class="card border-15 mx-0">
                                                                    <div class="col-12 text-left px-0">
                                                                        <div class="card-header border-15">
                                                                            <h4 class="text-left p-0 pt-2">
                                                                                <span
                                                                                    class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                                    {{ $candidate->firstName ? ucwords($candidate->firstName . ' ' . $candidate->lastName) : 'Not Defined' }}
                                                                                </span>
                                                                                <small
                                                                                    class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                                    Candidate Name
                                                                                </small>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 text-left">
                                                                        <h6 class="text-left p-0 pt-2">
                                                                            <span
                                                                                class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                                {{ $candidate->citizenship ? ucwords($candidate->citizenship) : 'Not Defined' }}
                                                                            </span>
                                                                            <small
                                                                                class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                                Citizenship
                                                                            </small>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-12 text-left">
                                                                        <h6 class="text-left p-0 pt-2">
                                                                            <span
                                                                                class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                                {{ $candidate->schools->first->qualification ? ucwords($candidate->schools->first()->qualification) : 'Not Defined' }}
                                                                            </span>
                                                                            <small
                                                                                class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                                Qualification
                                                                            </small>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12 px-0">
                                                    <div class="border-15 py-2 pl-1" id="">
                                                        @if (!file_exists('storage/candidate_image/' . $candidate->id .
                                                        '/' . $candidate->image) || !$candidate->image)
                                                        <img src="{{ asset('storage/candidate/default/noimage.png') }}"
                                                            alt="user avatar" class="border-15 img-thumbnail"
                                                            id="newCandidateImage">
                                                        @else
                                                        <img src="{{ asset('storage/candidate_image/' . $candidate->id . '/' . $candidate->image) }}"
                                                            alt="user avatar" class="border-15 img-thumbnail"
                                                            id="newCandidateImage">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12 px-0">
                                                <div class="card-block py-3 pl-1" id="newCandidateDescriptionBlock">
                                                    <div class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                        <div class="align-middle mr-2 p-0">
                                                            <h5 class="pl-1">
                                                                <i class="fa fa-birthday-cake fa-lg mt-1 data"></i>
                                                            </h5>
                                                        </div>
                                                        <p class="align-middle text-left p-0">
                                                            <span
                                                                class="text-truncate py-0 px-2 m-0 d-flex justify-content-start description-block-text">
                                                                {{ $candidate->birthday ? $candidate->birthday : 'Not Defined' }}
                                                            </span>
                                                            <small
                                                                class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                Birthday
                                                            </small>
                                                        </p>
                                                    </div>
                                                    <div class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                        <div class="align-middle mr-2 p-0">
                                                            <h5 class="pl-1">
                                                                <i class="fa fa-venus-mars mt-1 fa-lg data"></i>
                                                            </h5>
                                                        </div>
                                                        <p class="align-middle text-left p-0">
                                                            <span
                                                                class="text-truncate py-0 px-2 m-0 d-flex justify-content-start description-block-text">
                                                                {{ $candidate->gender ? ucwords($candidate->gender) : 'Not Defined' }}
                                                            </span>
                                                            <small
                                                                class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                Gender
                                                            </small>
                                                        </p>
                                                    </div>
                                                    <div class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                        <div class="align-middle mr-2 p-0">
                                                            <h5 class="pl-1">
                                                                <i class="fi-rr-flag fa-lg mt-1 data"></i>
                                                            </h5>
                                                        </div>
                                                        <p class="align-middle text-left p-0">
                                                            <span
                                                                class="text-truncate py-0 px-2 m-0 d-flex justify-content-start description-block-text">
                                                                {{ $candidate->country ? ucwords($candidate->country) : 'Not Defined' }}
                                                            </span>
                                                            <small
                                                                class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                Country
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer lead">
                                        <p class="pb-0 mb-0">
                                            <span class="text-dark font-italic">
                                                Registered on
                                            </span>
                                            <span class="text-dark">
                                                {{ $candidate->created_at ? $candidate->created_at->format('d.m.Y') : 'Not Defined' }}
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
    </div>
</div>
