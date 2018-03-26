<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Task;

class TaskController extends Controller
{
    /**
     * Creates a task
     */
    public function create()
    {
        $this->validate(request(), [
            'description' => 'required',
        ]);

        Task::create([
            'description' => request('description'),
            'due_date' => request('due_date'),
            'project_id' => request('project_id'),
        ]);
    }

    /**
     * Fetches the tasks particular project
     */
    public function get($project)
    {
        return Task::where('project_id', $project)->get();
    }

    /**
     * Archives a particular task
     */
    public function archive($task)
    {
        //$task->archive();
    }
}
