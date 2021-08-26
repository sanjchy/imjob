<!-- Modal -->
<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header card-header">
                <p class="m-0 h5">
                    Contact Information
                </p>
            </div>
            <div class="modal-body py-3">
                <div id="success" class="alert-dismissible text-center"></div>
                <form method="post" action="{{ route('contact.store') }}" accept-charset="utf-8" id="contactRegister"
                    class="contactCreateForm needs-validation" novalidate>
                    @csrf
                    <input type="hidden" name="user_id" value="@if (isset($user->id)){{ $user->id }}@endif">
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                    <div class="row pb-2">
                        <div class="col-lg-6 col-md-6 pb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fi-rr-user other-data"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" aria-label="name"
                                    aria-describedby="basic-addon1" name="name">
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
                                        <i class="fi-rr-smartphone other-data"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone" aria-label="phone"
                                    aria-describedby="basic-addon1" name="phone">
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
                                    aria-describedby="basic-addon1" name="role">
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
                                        <i class="fi-rr-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" aria-label="email"
                                    aria-describedby="basic-addon1" name="email">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fab fa-facebook fa-lg text-primary"></i></span>
                                </div>
                                <input type="url" class="form-control" placeholder="facebook" aria-label="facebook"
                                    aria-describedby="basic-addon1" name="facebook">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('facebook'))
                                {{ $errors->first('facebook') }}
                                @endif
                            </small>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fab fa-linkedin fa-lg text-info"></i></span>
                                </div>
                                <input type="url" class="form-control" placeholder="LinkedIn" aria-label="linkedin"
                                    aria-describedby="basic-addon1" name="linkedin">
                            </div>
                            <small class="text-danger error">
                                @if ($errors->has('linkedin'))
                                {{ $errors->first('linkedin') }}
                                @endif
                            </small>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div>
                            <button type="submit" class="btn btn-sm btn-outline-info"
                                id="contactSaveButton">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
