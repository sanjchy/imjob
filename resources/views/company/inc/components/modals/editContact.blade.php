<!-- Modal -->
<div class="modal fade" id="editContact{{ $contact->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
            </div>
            <div class="modal-body">
                <div id="success" class="alert-dismissible text-center"></div>
                <form method="post" action="{{ route('contact.update',$contact) }}" accept-charset="utf-8"
                    id="contactRegister" class="contactCreateForm needs-validation" novalidate>
                    @csrf
                    @method('put')
                    <input type="hidden" name="user_id" value="{{ $contact->user_id }}">
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                    <div class="row pb-2">
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fi-rr-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" aria-label="name"
                                    aria-describedby="basic-addon1" name="name" value="{{ $contact->name }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fi-rr-smartphone"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone" aria-label="phone"
                                    aria-describedby="basic-addon1" name="phone" value="{{ $contact->phone }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('phone'))
                                {{ $errors->first('phone') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Role</i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Role" aria-label="role"
                                    aria-describedby="basic-addon1" name="role" value="{{ $contact->role }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('role'))
                                {{ $errors->first('role') }}
                                @endif

                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fi-rr-envelope other-data"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" aria-label="email"
                                    aria-describedby="basic-addon1" name="email" value="{{ $contact->email }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fab fa-facebook fa-lg text-primary"></i></span>
                                </div>
                                <input type="url" class="form-control" placeholder="facebook" aria-label="facebook"
                                    aria-describedby="basic-addon1" name="facebook" value="{{ $contact->facebook }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('facebook'))
                                {{ $errors->first('facebook') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fab fa-linkedin fa-lg text-info"></i></span>
                                </div>
                                <input type="url" class="form-control" placeholder="LinkedIn" aria-label="linkedin"
                                    aria-describedby="basic-addon1" name="linkedin" value="{{ $contact->linkedin }}">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('linkedin'))
                                {{ $errors->first('linkedin') }}
                                @endif
                            </small>
                        </div>
                    </div>
                    <div class="row pb-2 mt-3 d-flex justify-content-center">
                        <div>
                            <button type="submit" class="btn btn-sm btn-outline-info mb-2"
                                id="contactUpdateButton">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
