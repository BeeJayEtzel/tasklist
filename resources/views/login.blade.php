@extends('layout')

<div class="login">
    <form action="/login" method="post">
        {{ csrf_field() }}
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        @if (count($errors))
        <div class="form-errors">
                @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
                @endforeach
        </div>
        @endif
        <div class="form-footer">
            <input type="submit" value="Log In">
        </div>
    </form>
</div>

    