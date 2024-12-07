<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function viewProducts() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function createProduct() {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('admin.products');
    }

    public function editProduct(Product $product) {
        return view('admin.products.edit', compact('product'));
    }

    public function updateProduct(Request $request, Product $product) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product->update($validated);

        return redirect()->route('admin.products');
    }

    public function deleteProduct(Product $product) {
        $product->delete();
        return redirect()->route('admin.products');
    }
}
