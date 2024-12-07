@extends('layouts.app')

@section('content')
    <div class="admin-dashboard">
        <h1>Welcome Admin</h1>
        <p>You can manage mobile phones from here:</p>
        <ul>
            <li><a href="#">Add Product</a></li>
            <li><a href="{{ route('products.index') }}">Manage Products</a></li>
            <li><a href="#">View Products</a></li>
        </ul>
    </div>
@endsection

