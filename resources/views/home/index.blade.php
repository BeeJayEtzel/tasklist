@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="app-grid" id='app'>

        @include('home.panels.menu-panel')
        
        @include('home.panels.task-panel')

        @include('home.panels.subtask-panel')

        @include('home.panels.note-panel')

    </div>
@endsection





