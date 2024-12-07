@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%;">
<p><strong>Price:</strong> ${{ $product->price }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>

<form method="POST" action="{{ route('user.addToCart') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit">Add to Cart</button>
</form>
@endsection
