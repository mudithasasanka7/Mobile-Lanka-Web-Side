<!-- resources/views/user/product_details.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="product-details-container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <button>Add to Cart</button>
    </div>
@endsection
