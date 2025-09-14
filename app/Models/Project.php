<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'long_description',
        'cover_image',
        'gallery',
        'project_url',
        'repository_url',
    ];

    protected $casts = [
        'gallery' => 'array', // Para o campo JSON das imagens
    ];

    public function stacks(): BelongsToMany
    {
        return $this->belongsToMany(Stack::class, 'project_stacks');
    }
}
