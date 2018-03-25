@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="app-grid">
        <div class="menu-panel">
            <p>Today</p>
            <p>Next 7 days</p>
            <p>Calendar</p>
            <hr>
            <h3>Projects</h3>
            @foreach($projects as $project)
                <p>{{ $project->name }}</p>
            @endforeach
        </div>

        <div class="task-panel">
            <h2>Project name</h2>
            @foreach($tasks as $task)
                <div class="task">
                    <p>{{ $task->description }}</p>
                    <p>{{ $task->due_date }}</p>
                </div>
            @endforeach
        </div>

        <div class="subtask-panel">
            @foreach($subtasks as $subtask)
                <p>{{ $subtask->description }}</p>
                <p>{{ $subtask->due_date }}</p>
            @endforeach
        </div>

        <div class="note-panel">
            @foreach($notes as $note)
                <p>{{ $note->body }}</p>
            @endforeach
        </div>

    </div>
@endsection


