<div class="card shadow-none">
    {{-- Name Image Citizenship Gender --}}
    <div class="card-body text-center bg-light p-0 bg-white">
        <div class="container-fluid px-0" id="">
            <div class="img-thumbnail">
                @if (!file_exists('storage/candidate_image/'.$candidate->id.'/'.$candidate->image) ||
                !$candidate->image)
                <img src="{{ asset('storage/candidate/default/noimage.png') }}" alt="user avatar" class="card-img-top"
                    style="height: 250px;">
                @else
                <img src="{{ asset('storage/candidate_image/'.$candidate->id.'/'.$candidate->image) }}"
                    alt="user avatar" class="img-thumbnail" style="height: 250px;">
                @endif
            </div>
            <div class="container-fluid d-flex justify-content-between py-2">
                <h4 class="my-2 float-left text-dark text-left font-weight-bold">
                    {{ $candidate->firstName . ' ' . $candidate->lastName}}
                </h4>
                <div class="mt-1 no-print">
                    <a class="btn btn-outline-success py-1 px-2 m-0 data" id="makePDF"
                        data-candidate="{{ $candidate->id }}">
                        Download Profile
                    </a>
                    <a class="btn btn-outline-info py-1 px-2 m-0 data" data-toggle="modal" data-target="#candidateCV">
                        CV
                    </a>
                </div>
            </div>
            @include('candidate.inc.modals.profile.cv')
        </div>
        <div class="container-fluid px-0" id="">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                {{-- Name Image Citizenship Gender END --}}
                <div class="container-fluid py-3">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center px-0">
                            <div class="card mb-4 shadow-none">
                                <div class="card-header p-1 m-0 d-flex justify-content-between">
                                    <h5 class="py-2 px-3 my-0 font-weight-bold">Information</h5>
                                </div>
                                <div class="card-body">
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
                                                            {{ ucwords($candidate->country) ?? ""}}
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
                                                            {{ ucwords($candidate->city) ?? ""}}
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
                                                        <i class="fi-rr-envelope data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            <a href="mailto:{{ $candidate->email ?? ""}}"
                                                                class="text-dark">
                                                                {{ $candidate->email ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-smartphone data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ ucwords($candidate->phone) ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-id-badge data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ ucwords($candidate->citizenship) ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fa fa-venus-mars data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ ucwords($candidate->gender) ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fa fa-car data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ ucwords($candidate->drivingLicence) ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                                            <div class="my-1">
                                                <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                    <div class="align-middle mr-2 pt-1">
                                                        <i class="fi-rr-exclamation data fa-2x"></i>
                                                    </div>
                                                    <div class="align-middle text-left pt-1">
                                                        <p
                                                            class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                            {{ ucwords($candidate->availableFrom) ?? ""}}
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
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
                                                                <small class="font-weight-bold text-muted text-left">
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
        </div>
    </div>
</div>
