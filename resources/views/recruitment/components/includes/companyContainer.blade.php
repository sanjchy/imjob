<div class="container-fluid p-0 m-0 rounded mb-2 bg-white">
    <div class="container-fluid p-0 m-0 bg-white">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0 m-0 bg-white">
            <div class="card shadow-none">
                <div class="card-header p-2 m-0 d-flex justify-content-between">
                    <div>
                        <h4 class="my-0 py-0 font-weight-bold">
                            {{ $company->name ? ucwords($company->name) : "Not Defined" }}
                        </h4>
                        <small class="small text-muted font-italic">
                            Company Name
                        </small>
                    </div>
                    <div class="pt-2">
                        <h6 class="my-0 py-0 font-weight-bold">
                            {{ $company->industry ? ucwords($company->industry) : "Not Defined" }}
                        </h6>
                        <small class="small text-muted font-italic">
                            Company Industry
                        </small>
                    </div>
                </div>
                {{-- Company Description --}}
                <div class="card-body shadow-none m-0">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-2 card shadow-none">
                        <small>
                            <p class="blockquote mt-2" style="font-size: 0.92rem;">
                                {{ $company->about }}
                            </p>
                        </small>
                    </div>
                </div>
                {{-- Information --}}
                <div class="card-body d-flex justify-content-between">
                    <div class="container-fluid p-0 m-0">
                        <div class="row p-0 m-0">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="card shadow-none m-2">
                                    <div class="card-header p-2 m-0 d-flex justify-content-between">
                                        <div>
                                            <h5 class="my-0 py-0 font-weight-bold">
                                                Information
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3 pb-1">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-globe data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    <a href="https://{{ $company->website }}"
                                                                        class="text-dark">{!!
                                                                        $company->website ?
                                                                        $company->website : "&nbsp;" !!}</a>
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Website</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-building data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->industry ? $company->industry
                                                                    : "&nbsp;" !!}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Industry</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-signal-alt-2 data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->size ? $company->size :
                                                                    "&nbsp;" !!}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Company
                                                                            Size</small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-signal-alt-2 data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {{ $company->jobs->count() }}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">
                                                                            Total Jobs Posted
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
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="card shadow-none m-2">
                                    <div class="card-header p-2 m-0 d-flex justify-content-between">
                                        <div>
                                            <h5 class="my-0 py-0 font-weight-bold">
                                                Location
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3 pb-1">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-flag data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->country ?
                                                                    ucwords($company->country) :
                                                                    "&nbsp;" !!}
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
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-building data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->city ? ucwords($company->city)
                                                                    : "&nbsp;" !!}
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
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-id-badge data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->address ? $company->address :
                                                                    "&nbsp;" !!}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Address
                                                                        </small>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-start mb-2">
                                                    <div class="my-1">
                                                        <div class="p-0 m-0 d-flex justify-content-between text-left">
                                                            <div class="align-middle mr-2 pt-1">
                                                                <i class="fi-rr-smartphone data fa-2x"></i>
                                                            </div>
                                                            <div class="align-middle text-left pt-1">
                                                                <p
                                                                    class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                    {!! $company->phone ? $company->phone :
                                                                    "&nbsp;" !!}
                                                                </p>
                                                                <span class="m-0 p-0 d-flex justify-content-start">
                                                                    <span class="d-flex justify-content-start">
                                                                        <small
                                                                            class="font-weight-bold text-muted text-left">Phone
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
                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12">
                                <div class="card shadow-none m-2">
                                    {{-- Contact Header --}}
                                    <div class="card-header p-0 m-0">
                                        <div class="card-header p-2 m-0 d-flex justify-content-between bg-light">
                                            <div>
                                                <h5 class="my-0 py-0 font-weight-bold">
                                                    Contact
                                                </h5>
                                                <small class="small text-muted font-italic">
                                                    Contact information
                                                </small>
                                            </div>
                                            <div class="p-2 m-0">
                                                {{-- Contact Modal --}}
                                                {{-- @include('company.inc.components.modals.addContact')
                                                                                <a data-toggle="modal" data-target="#addContact" class="">
                                                                                    <i class="fi-rr-add fa-lg other-data"></i>
                                                                                </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-1">
                                        <div class="container-fluid">
                                            <div class="row">
                                                @foreach ($company->contacts as $contact)
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="card shadow-none m-2">
                                                        <div class="card-header p-2 m-0 d-flex justify-content-between">
                                                            <div>
                                                                <p class="my-0 py-0 font-weight-bold">
                                                                    {!! $contact->name ? ucwords($contact->name) :
                                                                    "&nbsp;" !!}
                                                                </p>
                                                                <small class="small text-muted font-italic">
                                                                    {!! $contact->role ? ucwords($contact->role) :
                                                                    "&nbsp;"!!}
                                                                </small>
                                                            </div>
                                                            <span class="my-2 py-1">
                                                                {{-- @can('update', $contact)
                                                                                                <a>
                                                                                                    <i class="fi-rr-edit fa-lg other-data mx-1" data-toggle="modal"
                                                                                                        data-target="#editContact{{ $contact->id }}"></i>
                                                                </a>
                                                                @include('company.inc.components.modals.editContact')
                                                                @endcan
                                                                @can('delete', $contact)
                                                                <a>
                                                                    <i class="fi-rr-cross-circle fa-lg other-data mx-1"
                                                                        data-toggle="modal"
                                                                        data-target="#deleteContact{{ $contact->id }}"></i>
                                                                </a>
                                                                @include('company.inc.components.modals.deleteContact')
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
                                                                                    <i
                                                                                        class="fi-rr-envelope data fa-2x"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="align-middle text-left pt-1">
                                                                                    <p
                                                                                        class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                        <a href="mailto:{{ $contact->email }}"
                                                                                            class="text-dark">
                                                                                            {!! $contact->email ?
                                                                                            $contact->email : "&nbsp;"
                                                                                            !!}
                                                                                        </a>
                                                                                    </p>
                                                                                    <span
                                                                                        class="m-0 p-0 d-flex justify-content-start">
                                                                                        <span
                                                                                            class="d-flex justify-content-start">
                                                                                            <small
                                                                                                class="font-weight-bold text-muted text-left">Email</small>
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
                                                                                    <i
                                                                                        class="fi-rr-smartphone data fa-2x"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="align-middle text-left pt-1">
                                                                                    <p
                                                                                        class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                        {!! $contact->phone ?
                                                                                        $contact->phone :
                                                                                        "&nbsp;" !!}
                                                                                    </p>
                                                                                    <span
                                                                                        class="m-0 p-0 d-flex justify-content-start">
                                                                                        <span
                                                                                            class="d-flex justify-content-start">
                                                                                            <small
                                                                                                class="font-weight-bold text-muted text-left">Phone
                                                                                                number</small>
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
                                                                                    <i
                                                                                        class="fab fa-facebook-square data fa-2x"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="align-middle text-left pt-1">
                                                                                    <p
                                                                                        class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                        <a href="{{ $contact->facebook }}"
                                                                                            class="text-dark">{!!
                                                                                            $contact->facebook ?
                                                                                            $contact->facebook : "Not
                                                                                            Defined"
                                                                                            !!}</a>
                                                                                    </p>
                                                                                    <span
                                                                                        class="m-0 p-0 d-flex justify-content-start">
                                                                                        <span
                                                                                            class="d-flex justify-content-start">
                                                                                            <small
                                                                                                class="font-weight-bold text-muted text-left">Facebook</small>
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
                                                                                    <i
                                                                                        class="fab fa-linkedin data fa-2x"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="align-middle text-left pt-1">
                                                                                    <p
                                                                                        class="p-0 m-0 font-weight-bold d-flex justify-content-start">
                                                                                        <a href="{{ $contact->linkedin }}"
                                                                                            class="text-dark"
                                                                                            target="_blank">
                                                                                            {!! $contact->linkedin ?
                                                                                            $contact->linkedin : "Not
                                                                                            Defined"
                                                                                            !!}
                                                                                        </a>
                                                                                    </p>
                                                                                    <span
                                                                                        class="m-0 p-0 d-flex justify-content-start">
                                                                                        <span
                                                                                            class="d-flex justify-content-start">
                                                                                            <small
                                                                                                class="font-weight-bold text-muted text-left">LinkedIn</small>
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
        </div>
    </div>

</div>
