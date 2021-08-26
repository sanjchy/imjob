<div class="modal fade contactAdd" tabindex="-1" role="dialog" aria-labelledby="contactAdd" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded shadow-sm">
            <div class="modal-header">
                Add New Contact
            </div>
            <div class="container-fluid pb-3 pt-3">
                <form method="post" action="/contact/store" accept-charset="utf-8" id="contactAdd"
                    class="contactAdd needs-validation" novalidate>
                    <div class="row pb-2">
                        <div class="col-lg-6 col-md-6 pb-4">
                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                            <label for="name">Full name
                                <small>
                                    @if ($errors->has('name'))
                                    <span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true">
                                    </span>
                                    @endif
                                </small>
                            </label>
                            <input type="text"
                                class="form-control @if ($errors->has('name')) is-invalid @elseif (!empty(old('name'))) is-valid @endif"
                                id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <small class="text-danger error">
                                {{ $errors->first('name') }}
                            </small>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <label for="Phone">Phone number
                                @if ($errors->has('phone'))
                                <small>
                                    <span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true">
                                    </span>
                                </small>
                                @endif
                            </label>
                            <input type="text"
                                class="form-control @if ($errors->has('phone')) is-invalid @elseif (!empty(old('phone'))) is-valid @endif"
                                id="phone" name="phone" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                            <small class="text-danger error">
                                {{ $errors->first('phone') }}
                            </small>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <label for="role">Role
                                @if ($errors->has('role'))
                                <small>
                                    <span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true">
                                    </span>
                                </small>
                                @endif
                            </label>
                            <input type="text"
                                class="form-control @if ($errors->has('role')) is-invalid @elseif (!empty(old('role'))) is-valid @endif"
                                id="role" name="role" value="{{ old('role') }}">
                            @if ($errors->has('role'))
                            <small class="text-danger error">
                                {{ $errors->first('role') }}
                            </small>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <label for="email">Email
                                @if ($errors->has('email'))
                                <small>
                                    <span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true">
                                    </span>
                                </small>
                                @endif
                            </label>
                            <input type="email"
                                class="form-control @if ($errors->has('email')) is-invalid @elseif (!empty(old('email'))) is-valid @endif"
                                id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <small class="text-danger error">
                                {{ $errors->first('email') }}
                            </small>
                            @endif
                        </div>
                    </div>
                    <div class="row pb-2 mt-3">
                        <button type="submit" class="btn btn-outline-info col-2 offset-5 mb-2"
                            id="contactSaveButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
