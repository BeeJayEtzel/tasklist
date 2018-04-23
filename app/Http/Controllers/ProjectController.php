<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class ProjectController extends Controller
{
    /**
     * Creates a Project
     */
    public function create()
    {
        $this->validate(request(), [
            'name' =>  'required' 
        ]);

        Project::create([
            'name' => request('name'),
            'user_id' => auth()->user()->id
        ]);

    }

    /**
     * Deletes a particular project
     */
    public function delete($project)
    {
        Project::where('id', $project)->delete(['id' => request('id')]);
    }
}
