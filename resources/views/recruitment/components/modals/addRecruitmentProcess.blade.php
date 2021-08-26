<div class="modal fade" tabindex="-1" role="dialog" id="addRecruitmentProcess" aria-labelledby="addRecruitmentProcess"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded shadow-sm">
            <div class="modal-header">
                Add New Process
            </div>
            <div class="container-fluid pb-3 pt-3">
                <form method="post" action="{{ route("recruitment.update",$recruitment->id) }}" accept-charset="utf-8"
                    id="addRecruitmentProcessForm" class="addRecruitmentProcessForm needs-validation" novalidate>
                    @csrf
                    @method("PATCH")
                    <input type="text" name="status" class="form-control">
                    <button class="btn btn-sm btn-outline-success float-right" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
