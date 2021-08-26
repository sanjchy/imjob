<!-- Modal -->
<div class="modal fade" id="addLanguage" tabindex="-1" role="dialog" aria-labelledby="addLanguageLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header">Language</div>
            <div class="modal-body">
                <form action="{{ route("language.store") }}" method="post">
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-success p-2">Save</button>
            </div>
        </div>
    </div>
</div>
