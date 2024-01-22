<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <h1>Hello World</h1>
</body>
@auth
        <p>Welcome, {{ auth()->user()->name }}!</p>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <p>You are not logged in.</p>
    @endauth
<div>
    <p>Want to reset your password? <a href="{{ url('/reset-password') }}">Reset Password</a></p>
</div>
</html>
