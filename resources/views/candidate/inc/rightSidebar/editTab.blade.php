<div class="tab-pane" id="edit">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 offset-1 mt-1">
                @can('update', $candidate)
                <div class="card shadow-none mt-2">
                    <div class="card-header p-0 m-0 d-flex justify-content-between">
                        <h4 class="py-2 px-3 m-0 font-weight-bold">Candidate Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('candidate.update',$candidate->id) }}" method="post"
                            enctype="multipart/form-data" id="editCandidateForm">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="firstName" type="text"
                                        value="{{ $candidate->firstName ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="lastName" type="text"
                                        value="{{ $candidate->lastName ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Citizenship</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="citizenship" type="text"
                                        value="{{ $candidate->citizenship ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="gender" type="text"
                                        value="{{ $candidate->gender ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="email" type="email"
                                        value="{{ $candidate->email ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="phone" type="text"
                                        value="{{ $candidate->phone ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">About</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" name="message"
                                        rows="6">{{ $candidate->message ? $candidate->message : '' }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
                                <div class="col-lg-9">
                                    <input class="form-control edit-candidate-date-picker" name="birthday"
                                        value="{{ $candidate->birthday ? date('m.d.Y',strtotime($candidate->birthday)) : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Change picture</label>
                                <div class="col-lg-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" type="file"
                                            id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Country</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="country" type="text"
                                        value="{{ $candidate->country }}" placeholder="Country">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">City</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="address" type="text"
                                        value="{{ $candidate->city }}" placeholder="Street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="address" type="text"
                                        value="{{ $candidate->address }}" placeholder="Street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <a onclick="$(this).closest('form').submit();" class="mr-3">
                                        <i class="fi-rr-check other-data fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <div class="col-lg-12 text-center p-2">
                    <div class="alert alert-danger">You are not allowed to edit this Candidate!</div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
