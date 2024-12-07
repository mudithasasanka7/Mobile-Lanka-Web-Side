<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="admin-dashboard">
        <h1>Welcome Admin</h1>
        <p>You can manage mobile phones from here:</p>
        <ul>
            <li><a href="{{ url('/admin/products/create') }}">Add Product</a></li>
            <li><a href="{{ url('/admin/products') }}">View Products</a></li>
        </ul>
    </div>
@endsection
