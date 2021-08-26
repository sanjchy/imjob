<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function candidates()
    {
        return $this->hasMany("App\Models\Candidate");
    }

    public function companies()
    {
        return $this->hasMany("App\Models\Company");
    }

    public function jobs()
    {
        return $this->hasMany("App\Models\Job");
    }

    public function notes()
    {
        return $this->hasMany("App\Models\Note");
    }

    public function recruitments()
    {
        return $this->hasMany("App\Models\Recruitment");
    }

    public function recruitmentProcess()
    {
        return $this->hasMany("App\Models\RecruitmentProcess");
    }

    public function recruitmentProcessComments()
    {
        return $this->hasMany("App\Models\RecruitmentProcessComment");
    }
}
