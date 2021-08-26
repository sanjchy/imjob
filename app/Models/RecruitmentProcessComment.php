<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentProcessComment extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "comment",
        "recruitment_process_id"
    ];

    public function recruitmentProcess()
    {
        return $this->belongsTo("App\Models\RecruitmentProcess");
    }

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }
}
