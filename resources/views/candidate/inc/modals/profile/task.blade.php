<!-- Modal -->
<div class="modal fade" id="candidateTask{{ $job->id }}" tabindex="-1" role="dialog"
    aria-labelledby="candidateTaskLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="card-header">Tasks performed</div>
            <div class="modal-body">
                {{ $job->tasks }}
            </div>
        </div>
    </div>
</div>
