@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="app-grid" id='app'>

        @include('home.panels.menu-panel')
        
        @include('home.panels.task-panel')

        @include('home.panels.subtask-panel')

{{--

        <div class="note-panel">
            @foreach($user->projects->tasks->notes as $note)
                <p>{{ $note->body }}</p>
            @endforeach
        </div>
        --}}
    </div>
@endsection





