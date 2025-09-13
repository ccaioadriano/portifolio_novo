<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //


    public function stacks()
    {
        return $this->belongsToMany(Stack::class);
    }
}
