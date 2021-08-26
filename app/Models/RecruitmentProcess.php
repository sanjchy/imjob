<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentProcess extends Model
{
    use HasFactory;

    public function recruitment()
    {
        return $this->belongsTo('App\Models\Recruitment')->orderBy('id', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\RecruitmentProcessComment');
    }
}
