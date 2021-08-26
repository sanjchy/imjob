<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class School extends Model
{
    use HasFactory;

    protected $casts = [
        'schoolName'    => 'array',
        'qualification' => 'array',
        'graduated' => 'array',
        'schoolCity'    => 'array',
        'schoolCountry' => 'array',
    ];

    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
}
