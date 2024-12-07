@extends('layouts.app')

@section('content')
<h1>Mobile Lanka</h1>
<div style="display: flex; flex-wrap: wrap;">
    @foreach ($products as $product)
    <div style="border: 1px solid #ccc; padding: 10px; margin: 10px; width: 30%;">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%;">
        <h3>{{ $product->name }}</h3>
        <p>${{ $product->price }}</p>
        <a href="{{ route('product.details', $product->id) }}">View Details</a>
    </div>
    @endforeach
</div>
@endsection
