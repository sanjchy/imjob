<div class="card">
    <div class="card-header">Job Offer</div>
    <div class="card-body">
        <form method="post" action="{{ route("offer-store") }}">
            @csrf
            <div class="form-group row">
                <label for="warning" class="col-3 col-form-label">Note</label>
                <div class="col-9">
                    <textarea id="warning" name="warning" cols="40" rows="5" class="form-control editor"
                        required="required"></textarea>
                </div>
            </div>
            <input type="hidden" name="job_id" value="{{ $job->id }}">
            <div class="form-group row">
                <label for="position" class="col-3 col-form-label">Position</label>
                <div class="col-9">
                    <textarea id="position" name="position" cols="40" rows="5" class="form-control editor"
                        required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="jobDescription" class="col-3 col-form-label">Job Description</label>
                <div class="col-9">
                    <textarea id="description" name="description" cols="40" rows="5" class="form-control editor"
                        required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="lookingFor" class="col-3 col-form-label">We are we looking for</label>
                <div class="col-9">
                    <textarea id="lookingFor" name="lookingFor" type="text" class="form-control"
                        required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="whatDoWeOffer" class="col-3 col-form-label">What do we offer</label>
                <div class="col-9">
                    <textarea id="whatDoYouGet" name="weOffer" type="text" class="form-control"
                        required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="Notes" class="col-3 col-form-label">Additional Notes</label>
                <div class="col-9">
                    <textarea id="Notes" name="note" cols="40" rows="5" class="form-control editor"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
