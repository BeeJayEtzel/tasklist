<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'name', 'user_id'
    ];

    /**
     * Get tasks for a Project
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
