<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get tasks for a Project
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
