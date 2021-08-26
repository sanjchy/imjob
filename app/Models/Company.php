<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Note;
use App\Models\User;
use App\Models\Contact;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'industry',
        'phone',
        'country',
        'website',
        'city',
        'size',
        'about',
        'user_id',
    ];

    public function jobs()
    {
        return $this->hasMany('App\Models\Job')->orderBy('id', 'DESC');
    }

    public function candidates()
    {
        return $this->belongsToMany('App\Models\Candidate', 'recruitment');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note')->orderBy('id', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact')->orderBy('id', 'DESC');
    }

    public function contact()
    {
        return $this->hasOne('App\Models\Contact');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File')->orderBy('id', 'DESC');
    }
}
