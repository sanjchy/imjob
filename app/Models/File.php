<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function recruitment()
    {
        return $this->belongsTo('App\Models\Recruitment');
    }
}
