@extends('layouts.app')

@section('content')
<div class="login-container">
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <h2>Login to Mobile Lanka</h2>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
    </form>
</div>
@endsection
