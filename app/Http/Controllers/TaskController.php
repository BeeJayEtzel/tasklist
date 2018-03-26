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
            'text' => 'required',
        ]);

        Task::create([
            'text' => request('text'),
            'due_date' => request('due_date'),
            'project_id' => request('project_id'),
        ]);
    }

    /**
     * Fetches the tasks particular project
     */
    public function get($project)
    {
        //$tasks = \App\Project::find($project)->tasks;

        return Task::where('project_id', $project)->get();
        return ["Task one", 'Task Two!!!'];
    }

    /**
     * Archives a particular task
     */
    public function archive($task)
    {
        //$task->archive();
    }
}
