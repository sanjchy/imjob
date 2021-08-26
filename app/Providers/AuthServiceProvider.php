<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\Company;
use App\Models\Candidate;
use App\Policies\JobPolicy;
use App\Policies\CompanyPolicy;
use App\Policies\CandidatePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        Candidate::class => CandidatePolicy::class,
        Company::class => CompanyPolicy::class,
        Job::class => JobPolicy::class,
        File::class => FilePolicy::class,
        Contact::class => ContactPolicy::class,
        Note::class => NotePolicy::class,
        Recruitment::class => RecruitmentPolicy::class,
        JobSchool::class => JobSchoolPolicy::class,
        Work::class => WorkPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
