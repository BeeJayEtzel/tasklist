@extends("layout")

<div class="register">
    <h1 class="form-header">Create an Account</h1>
    <form action="/register" method="post">
        {{ csrf_field() }}
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>
        <div class="form-footer">
            <input type="submit" value="Create Account">
            <p>Already have an account? <a href="/login">Log In.</a></p>
        </div>
    </form>
    @if (count($errors))
        <div class="form-errors">
                @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
                @endforeach
        </div>
    @endif
</div>