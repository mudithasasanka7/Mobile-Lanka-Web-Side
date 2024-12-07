@extends('layouts.app')

@section('content')
<div class="register-container">
    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <h2>Register for Mobile Lanka</h2>
        
        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="input-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        
        <button type="submit" class="btn">Register</button>

        <!-- Link to the Login page -->
        <div class="register-link">
            <a href="{{ url('login') }}">Already have an account? Login</a>
        </div>
    </form>
</div>
@endsection
