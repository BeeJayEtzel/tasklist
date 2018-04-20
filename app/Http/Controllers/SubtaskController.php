<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Subtask;

class SubtaskController extends Controller
{
    /**
     * Creates a subtask
     */
    public function create()
    {
        $this->validate(request(), [
            'description' => 'required',
        ]);


        Subtask::create([
            'description' => request('description'),
            'due_date' => request('due_date'),
            'task_id' => request('task_id'),
        ]);
    }

    /**
     * Fetches the subtasks particular task
     */
    public function get($task)
    {
        return Subtask::where('task_id', $task)->get();
    }

    /**
     * Complete a particular subtask
     */
    public function complete($task)
    {
        Subtask::where('id', $task)->update(['completed' => request('completed')]);
    }
}
