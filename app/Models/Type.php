<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // projects relation
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
