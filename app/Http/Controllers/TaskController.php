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
        return Task::where('project_id', $project)->orderBy('due_date')->get();
    }

    /**
     * Complete a particular task
     */
    public function complete($task)
    {
        Task::where('id', $task)->update(['completed' => request('completed')]);
    }

    /**
     * Deletes a particular task
     */
    public function delete($task)
    {
        Task::where('id', $task)->delete(['id' => request('id')]);
    }
}
