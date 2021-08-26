<div class="row px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
        <h3 class="px-2 py-1">{{ ucwords($job->requiredProfession) }} <span class="text-muted">at</span>
            <span>
                <a href="{{ route('company.show',$job->company->id) }}">{{ ucwords($job->company->name) }}</a>
                <span class="mx-2 p-2 badge badge-info">{{ ucwords($job->placeOfWork) }}</span>
            </span>
        </h3>
    </div>
    <div class="col-lg-6 col-md-3 col-sm-3 d-flex justify-content-end">
        <div class="p-2">
            <span class="badge badge-warning p-2" style="font-size: 0.94rem;">
                <span class="p-3">{{ ucwords($job->corporateInsertion) }}</span>
            </span>
        </div>
    </div>
</div>
