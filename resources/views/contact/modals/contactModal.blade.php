<!-- Modal -->
<div class="modal fade" id="contactModal{{ $company->contact->first()->id }}" tabindex="-1" role="dialog"
    aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid p-0">
                    <div class="row p-0">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 p-0">
                            <div class="card p-0">
                                <div class="card-header text-center p-0">
                                    <div class="card p-0">
                                        <div class="my-1">
                                            <strong>{{ $company->contact->first()->name }}</strong>
                                        </div>
                                        <div class="mb-1">
                                            <span class="badge badge-primary p-1"><span
                                                    class="text-truncate">{{ $company->contact->first()->role }}</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div class="d-flex justify-content-center">
                                        <span>
                                            <i class="fa fa-phone text-success fa-lg align-middle"
                                                aria-hidden="true"></i>
                                        </span>
                                        <small
                                            class="font-weight-bold text-dark mx-2 text-wrap align-middle">{{ $company->contact->first()->phone }}</small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <span>
                                            <i class="fa fa-envelope text-danger fa-lg align-middle"
                                                aria-hidden="true"></i>
                                        </span>
                                        <small>
                                            <a href="mailto:{{ $company->contact->first()->email }}"
                                                class="font-weight-bold text-dark mx-2 text-wrap align-middle">{{ $company->contact->first()->email }}</a>
                                        </small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <span>
                                            <i class="fab fa-linkedin text-info fa-lg align-middle"
                                                aria-hidden="true"></i>
                                        </span>
                                        <small>
                                            <a href="{{ $company->contact->first()->linkedin ?? '' }}"
                                                class="font-weight-bold text-dark mx-2 text-wrap align-middle">
                                                {!! $company->contact->first()->linkedin ??
                                                '<span class="text-muted">Not Defined</span>' !!}</a>
                                        </small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <span>
                                            <i class="fab fa-facebook-square text-primary fa-lg align-middle"
                                                aria-hidden="true"></i>
                                        </span>
                                        <small>
                                            <a href="{{ $company->contact->first()->facebook ?? '' }}"
                                                class="font-weight-bold text-dark mx-2 text-wrap align-middle">
                                                {!! $company->contact->first()->facebook ??
                                                '<span class="text-muted">Not Defined</span>' !!}</a>
                                        </small>
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
