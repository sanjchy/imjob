<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['user'];


    protected $fillable = [
        'note',
        'user_id',
        'job_id',
        'company_id',
        'candidate_id',
        'contact_id',
        'recruitment_id',
    ];

    /**
     * Get the jobs for the company.
     */

    public function user()
    {
        return $this->belongsTo('App\Models\User')->orderBy('id', 'DESC');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company')->orderBy('id', 'DESC');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate')->orderBy('id', 'DESC');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job')->orderBy('id', 'DESC');
    }

    public function recruitment()
    {
        return $this->belongsTo('App\Models\Recruitment')->orderBy('id', 'DESC');
    }
}
