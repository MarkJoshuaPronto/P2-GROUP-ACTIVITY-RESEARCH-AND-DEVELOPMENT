<!-- resources/views/register.blade.php -->

<form action="{{ url('/register') }}" method="post">
    @csrf
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <label>Confirm Password: <input type="password" name="password_confirmation" required></label><br>
    <button type="submit">Register</button>
</form>

<div>
    <p>Already have an account? <a href="{{ url('/login') }}">Log In</a></p>
</div>
