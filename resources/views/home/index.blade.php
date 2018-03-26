@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="app-grid" id='app'>

        @include('home.panels.menu-panel')
        
        @include('home.panels.task-panel')

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





