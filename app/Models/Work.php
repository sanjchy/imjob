<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
}
