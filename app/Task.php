<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Get notes for a Task
     */
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    /**
     * Get subtasks for a Task
     */
    public function subtasks()
    {
        return $this->hasMany(Subtask::class);
    }
    
}
