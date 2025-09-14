<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name',
        'headline',
        'bio',
        'profile_picture',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array', // Para o campo JSON dos links sociais
    ];
}
