<!-- Modal -->
<div class="modal fade" id="jobTask{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header card-header">
                <p class="m-0 h5">
                    Job Description
                </p>
            </div>
            <div class="modal-body py-3">
                {{ $job->jobDescription }}
            </div>
        </div>
    </div>
</div>
