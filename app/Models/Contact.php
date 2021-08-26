<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use Notifiable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'phone', 'role', 'user_id', 'company_id', 'linkedin', 'facebook'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company')->orderBy('id', 'DESC');
    }
}
