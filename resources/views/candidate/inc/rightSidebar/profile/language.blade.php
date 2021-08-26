{{-- LANGUAGE SKILLS START --}}
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="card mb-4 shadow-none">
        <div class="card-header p-1 m-0 d-flex justify-content-between">
            <h5 class="py-2 px-3 my-0 font-weight-bold">Language Skills</h5>
            <a class="d-none py-2 px-2" data-toggle="modal" data-target="#addLanguage">
                <i class="fi-rr-add fa-lg text-success"></i>
            </a>
            @include('candidate.inc.modals.profile.language')
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($candidate->languages as $attribute)
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-start">
                    <div class="mx-0 my-1">
                        <p class="p-0 m-0 font-weight-bold">
                            {{ ucwords($attribute->language) }}
                        </p>
                        <span>
                            <span>
                                <span class="font-weight-bolder text-muted">Level:</span>
                                <small>&nbsp;{{ ucwords($attribute->level) }}</small>
                            </span>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- LANGUAGE SKILLS END --}}
