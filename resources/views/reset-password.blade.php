<!-- resources/views/reset-password.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/reset-password') }}" method="post">
            @csrf
            <label>New Password: <input type="password" name="password" required></label><br>
            <label>Confirm Password: <input type="password" name="password_confirmation" required></label><br>
            <button type="submit">Reset Password</button>
        </form>
    </div>
    <div>
        <p>Don't want to Reset your Password? <a href="{{ url('/hello') }}">Go Back</a></p>
    </div>
@endsection
