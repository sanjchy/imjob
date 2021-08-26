<div class="card mb-3" id="newCandidatesContainer">
    <h4 class="text-left p-3">New Companies</h4>
    <div class="container-fluid">
        <div class="row p-0">
            @foreach (App\Models\Company::where('approved', 1)
        ->get()
        ->sortByDesc('id')
        ->take(6)
    as $company)
                <div class="col-md-3 col-lg-6 mb-3 py-0 px-2">
                    <a href="{{ route('company.show', $company->id) }}" class="text-decoration-none">
                        <span>
                            <div class="card m-0 p-0" id="newCandidatesContainer">
                                <div class="card-footer lead border-15 p-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-12 px-0 d-flex align-content-center">
                                                <h6 class="text-left p-0 pt-2">
                                                    <span
                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                        {{ $company->name ? $company->name : 'Not Defined' }}
                                                    </span>
                                                    <small
                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                        Company Name
                                                    </small>
                                                </h6>
                                            </div>
                                            {{-- <div class="col-sm-2 px-0">
                                                <small class="float-right badge border-15 badge-info text-white">
                                                    {{ $company->industry ? ucwords($company->industry) : 'Not Defined' }}
                                                </small>
                                            </div> --}}
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
                                                                        {{ $company->country ? ucwords($company->country) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Country
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-globe mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0 pr-2">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $company->website ? $company->website : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Website
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="">
                                                                        <i class="fi-rr-building fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $company->city ? ucwords($company->city) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        City
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-smartphone mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $company->phone ? $company->phone : 'Not Defined' }}
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
                                                                            class="fi-rr-location-alt fa-lg mt-1 data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $company->address ? ucwords($company->address) : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Address
                                                                    </small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 px-0 mx-0">
                                                            <div
                                                                class="px-0 pb-0 m-0 d-flex justify-content-start text-left">
                                                                <div class="align-middle ml-1 p-0">
                                                                    <h5 class="pl-1">
                                                                        <i class="fi-rr-users mt-1 fa-lg data"></i>
                                                                    </h5>
                                                                </div>
                                                                <p class="align-middle text-left p-0">
                                                                    <span
                                                                        class="description-block-text text-break text-dark font-weight-bold py-0 px-2 m-0 d-flex justify-content-start">
                                                                        {{ $company->size ? $company->size : 'Not Defined' }}
                                                                    </span>
                                                                    <small
                                                                        class="description-block-info font-italic m-0 py-0 px-2 d-flex justify-content-start font-weight-bold text-muted text-left">
                                                                        Size
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
                                            Registered on
                                        </span>
                                        <span class="text-dark">
                                            {{ $company->created_at ? $company->created_at->format('d.m.Y') : 'Not Defined' }}
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
