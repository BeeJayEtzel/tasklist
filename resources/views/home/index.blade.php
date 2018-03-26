@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="app-grid" id='app'>
        <div class="menu-panel">
            <p>Today</p>
            <p>Next 7 days</p>
            <p>Calendar</p>
            <hr>
            <h3>Projects</h3>
            @foreach($user->projects as $project)
                <p>{{ $project->name }}</p>
                <button @click="getTasks({{ $project->id }})">{{ $project->name }}</button>
            @endforeach
        </div>

        <div class="task-panel" id='task-panel'>
            <h2>Project name</h2>
                <div class="task">
                    <p v-for="task in tasks">@{{ task.description }}</p>
                </div>
        </div>


{{--
        <div class="task-panel" id='task-panel'>
            <h2>Project name</h2>
            @foreach($user->projects[0]->tasks as $task)
                <div class="task">
                    <p>{{ $task->description }}</p>
                    <p>{{ $task->due_date }}</p>
                </div>
            @endforeach
        </div>

        <div class="subtask-panel">
            @foreach($user->projects-tasks->subtasks as $subtask)
                <p>{{ $subtask->description }}</p>
                <p>{{ $subtask->due_date }}</p>
            @endforeach
        </div>

        <div class="note-panel">
            @foreach($user->projects->tasks->notes as $note)
                <p>{{ $note->body }}</p>
            @endforeach
        </div>
        --}}
    </div>
@endsection





