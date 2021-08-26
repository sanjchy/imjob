<!-- Modal -->
<div class="modal fade" id="addSoftware" tabindex="-1" role="dialog" aria-labelledby="addSoftwareLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header">Software</div>
            <div class="modal-body">
                <form action="{{ route("software.store") }}" method="post">
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-success p-2">Save</button>
            </div>
        </div>
    </div>
</div>
