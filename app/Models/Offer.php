<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        "warning",
        "position",
        "description",
        "lookingFor",
        "weOffer",
        "note",
        'status',
    ];

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
}
