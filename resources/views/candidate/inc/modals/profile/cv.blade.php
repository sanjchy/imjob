<!-- Modal -->
<div class="modal fade" id="candidateCV" tabindex="-1" role="dialog" aria-labelledby="candidateCVLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-header">Curriculum</div>
            <div class="modal-body" id="candidateCVBody" height="100">
                @if (!file_exists('storage/candidate_cv/'.$candidate->id.'/'.$candidate->cv) ||
                !$candidate->cv)
                <h1 class="text-center">
                    Not Found
                </h1>
                @else
                <embed src="{{ asset('storage/candidate_cv/'.$candidate->id.'/'.$candidate->cv) }}"
                    type="application/pdf" width="100%" height="700">
                @endif
            </div>
        </div>
    </div>
</div>
