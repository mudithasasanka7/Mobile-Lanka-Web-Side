@extends('layouts.app')

@section('content')
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Price</label>
        <input type="number" name="price" id="price" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">

        <button type="submit">Save Product</button>
    </form>
@endsection
