<?php

namespace App\Models;

use App\Models\Note;
use App\Models\User;
use App\Models\Company;
use App\Models\Candidate;
use League\Flysystem\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'requiredProfession',
        'openings',
        'placeOfWork',
        'salary',
        'workingHours',
        'avaliableNow',
        'jobDescription',
        'availabilityDate',
        'shifts',
        'accomodations',
        'accomodationsPays',
        'accomodationsCosts',
        'corporateInsertion',
        'contractDetails',
        'fixedTerm',
        'partTime',
        'additionalJobInformation',
        'candidateQualification',
        'candidateAge',
        'candidateEducation',
        'candidateWorkExperience',
        'language',
        'candidateOtherLanguage',
        'candidateComputerSkills',
        'candidateDrivingLicence',
        'candidateMeansOfTransport',
        'descriptionOfStaffRequest',
        'status',
    ];

    /**
     * Get the jobs for the company.
     */
    public function offer()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function candidates()
    {
        return $this->belongsToMany('App\Models\Candidate', 'recruitments')->orderBy('id', 'DESC');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate', 'recruitments');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note')->orderBy('id', 'DESC');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function recruitments()
    {
        return $this->hasMany('App\Models\Recruitment')->orderBy('id', 'DESC');
    }
}
