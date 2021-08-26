<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Note;
use App\Models\User;
use App\Models\Work;
use App\Models\School;
use App\Models\Company;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'professionalSkills'    => 'array',
        'professionalSkillsLevel'   => 'array',
        'software' => 'array',
        'softwareKnowledgeLevel' => 'array',
        'language' => 'array',
        'languageLevel' => 'array',
        'software' => 'array',
        'software' => 'array',

    ];

    protected $fillable = [
        'firstName',
        'address',
        'phone',
        'lastName',
        'city',
        'email',
        'gender',
        'country',
        'birthday',
        'image',
        'cv',
        'citizenship',
        'message',
        'candidateAgreement',
        'drivingLicence',
        'available',
        'availableFrom',
        'candidateAgreement',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note')->orderBy('id', 'DESC');
    }

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job', 'recruitments');
    }

    public function company()
    {
        return $this->belongsToMany('App\Models\Company');
    }

    public function work()
    {
        return $this->hasMany('App\Models\Work')->orderBy('id', 'DESC');
    }

    public function schools()
    {
        return $this->hasMany('App\Models\School')->orderBy('id', 'DESC');
    }

    public function skills()
    {
        return $this->hasMany('App\Models\Skills')->orderBy('id', 'DESC');
    }

    public function softwares()
    {
        return $this->hasMany('App\Models\Software')->orderBy('id', 'DESC');
    }

    public function languages()
    {
        return $this->hasMany('App\Models\Language')->orderBy('id', 'DESC');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File')->orderBy('id', 'DESC');
    }

    public function recruitments()
    {
        return $this->hasMany('App\Models\Recruitment')->orderBy('id', 'DESC');
    }
}
