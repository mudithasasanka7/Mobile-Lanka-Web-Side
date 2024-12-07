@extends('layouts.app')

@section('content')
<h1>Register</h1>
@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="/register">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Register</button>
</form>
@endsection
