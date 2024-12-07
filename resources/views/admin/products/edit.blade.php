@extends('layouts.app')

@section('content')
    <div class="product-edit-container">
        <h2>Edit Product</h2>

        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')  <!-- This is crucial for updating, as PUT method is used -->
            
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $product->name }}" required>
            </div>

            <div>
                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $product->price }}" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description">{{ $product->description }}</textarea>
            </div>

            <div>
                <label for="image">Image:</label>
                <input type="file" name="image">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
                @endif
            </div>

            <button type="submit">Update Product</button>
        </form>
    </div>
@endsection
