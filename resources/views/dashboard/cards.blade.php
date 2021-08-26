<div class="container-fluid">
    <div class="col px-xl-4">
        <div class="row my-5 px-xl-3 mx-lg-auto">
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('company_requests') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="card card-counter front" style="border-radius: 15px;">
                        <div class="card-body pb-1">
                            <span>
                                <i class="fi-rr-building other-data fa-lg"></i>
                                <span class="count-numbers ml-4" id="companiesTotalRequests">
                                    {{ App\Models\Company::where('approved', 0)->count() }}
                                </span>
                            </span>
                            <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">
                                Company Requests
                            </h6>
                        </div>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('company.index') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="d-block card card-counter" style="border-radius: 15px;">
                        <div class="card-body other-data pb-1">
                            <div>
                                <i class="fi-rr-building other-data fa-lg"></i>
                                <span class="count-numbers ml-4" id="companiesTotal">
                                    {{ App\Models\Company::where('approved', 1)->count() }}
                                </span>
                            </div>
                            <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">Companies
                            </h6>
                        </div>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('job.index') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="d-block card card-counter" style="border-radius: 15px;">
                        <div class="card-body pb-1 other-data">
                            <div>
                                <i class="fi-rr-briefcase other-data fa-lg"></i>
                                <span class="count-numbers ml-4" id="jobsTotal">
                                    {{ App\Models\Job::all()->count() }}
                                </span>
                            </div>
                            <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">Jobs</h6>
                        </div>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('candidate_requests') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="d-block card card-counter" style="border-radius: 15px;">
                        <div class="card-body pb-1 other-data">
                            <div>
                                <i class="fi-rr-user-time other-data fa-lg"></i>
                                <span class="count-numbers ml-4" id="candidatesTotalRequests">
                                    {{ App\Models\Candidate::where('approved', 0)->count() }}
                                </span>
                            </div>
                            <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">Candidate
                                Requests
                            </h6>
                        </div>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('candidate.index') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="d-block card card-counter" style="border-radius: 15px;">
                        <div class="card-body pb-1 other-data">
                            <div>
                                <i class="fi-rr-users other-data fa-lg"></i>
                                <span class="count-numbers ml-4" id="candidatesTotal">
                                    {{ App\Models\Candidate::where('approved', 1)->count() }}
                                </span>
                            </div>
                            <div>
                                <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">Candidates
                                </h6>
                            </div>
                        </div>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-lg-2 p-1 m-0">
                <a href="{{ route('recruitment.index') }}" class="d-block p-0 m-0 text-decoration-none">
                    <span class="d-block card card-counter" style="border-radius: 15px;">
                        <div class="card-body pb-1 other-data">
                            <div>
                                <i class="fi-rr-users other-data fa-lg"></i>
                                <span class="count-numbers ml-xl-4" id="recruitmentsTotal">
                                    {{ App\Models\Recruitment::where('verified', 1)->count() }}
                                </span>
                            </div>
                            <div>
                                <h6 class="text-right other-data py-2 px-0 font-weight-bold font-italic">
                                    Recruitments
                                </h6>
                            </div>
                        </div>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
