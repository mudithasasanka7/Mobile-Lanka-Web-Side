<!-- resources/views/auth/login.blade.php -->
@extends('layouts.apps')

@section('content')
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>

            @if ($errors->any())
                <div class="error-messages">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST" class="login-form">
                @csrf
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>

            <p>Don't have an account? <a href="{{ route('register') }}" class="link">Register</a></p>
        </div>
    </div>
@endsection
