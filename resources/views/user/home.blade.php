<!-- resources/views/user/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="home-container">
        <h1>Welcome to Mobile Lanka</h1>
        <p>Browse through our collection of mobile phones:</p>
        <!-- Loop through products and display them -->
        <div class="product-list">
            @foreach ($products as $product)
                <div class="product-item">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <a href="{{ route('product.details', $product->id) }}">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
