<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recruitment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    protected $guarded = [];

    protected $softDelete = true;


    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function recruitmentProcess()
    {
        return $this->hasMany('App\Models\RecruitmentProcess');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }
}
