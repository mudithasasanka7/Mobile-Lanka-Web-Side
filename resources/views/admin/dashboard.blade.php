@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>
<a href="{{ route('admin.addProduct') }}">Add New Product</a>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('admin.editProduct', $product->id) }}">Edit</a>
                <a href="{{ route('admin.deleteProduct', $product->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
