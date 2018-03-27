<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = [
        'description', 'due_date', 'task_id',
    ];
}
