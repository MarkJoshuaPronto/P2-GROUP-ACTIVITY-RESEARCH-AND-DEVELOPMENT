<!-- resources/views/login.blade.php -->

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ url('/login') }}" method="post">
    @csrf
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <button type="submit">Login</button>
</form>

<div>
    <p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
</div>
