<!-- Modal -->
<div class="modal fade" id="additionalInformationModal{{ $job->id }}" tabindex="-1" role="dialog"
    aria-labelledby="jobDescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-dark" id="additionalInformationModal">
                    Additional Information
                </h5>
            </div>
            <div class="modal-body p-0" id="jobCandidateBody">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="container-fluid p-0 m-0">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <p>
                                        {{ $job->additionalJobInformation }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
