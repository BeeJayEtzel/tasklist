<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Note;

class NoteController extends Controller
{
    /**
     * Creates a note
     */
    public function create()
    {
        $this->validate(request(), [
            'body' => 'required',
        ]);

        Note::create([
            'body' => request('body'),
            'task_id' => request('task_id'),
        ]);
    }

    /**
     * Fetches the subtasks particular task
     */
    public function get($task)
    {
        return Note::where('task_id', $task)->get();
    }
}
