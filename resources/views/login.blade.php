<div class="form">
    <form action="/login" method="post">
        {{ csrf_field() }}
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Log In">
    </form>
</div>

@if (count($errors))
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
    