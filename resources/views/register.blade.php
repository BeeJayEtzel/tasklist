<div class="form">
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
        <input type="submit" value="Register">
    </form>
</div>