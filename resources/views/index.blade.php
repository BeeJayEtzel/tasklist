@extends('layout')

@section('title')
    Tasklist
@endsection

@section('content')
    <div class="main-bg">
        <div class="main-content">
        <h1 class="app-header">Tasklist</h1>
        <h2>Create tasks.</h2>
        <h2>Define subtasks.</h2>
        <h2>Take notes.</h2>
        <p><span class="bold">Get work done.</span></p>
        <br>
        <a href="/register" class="button">Create account</a>
        <a href="/login" class="button">Login</a>

        </div>
    </div>
@endsection
