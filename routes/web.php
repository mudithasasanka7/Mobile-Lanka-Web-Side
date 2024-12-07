<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Home Route (for authenticated users)
Route::middleware('auth')->group(function () {
    // User Home Page
    Route::get('/home', [UserController::class, 'index'])->name('home');
    
    // Admin Routes (Only accessible to users with admin role)
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/products', [AdminController::class, 'viewProducts'])->name('admin.products');
        Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
        Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
        Route::get('/products/{product}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
        Route::put('/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
        Route::delete('/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
        Route::resource('products', ProductController::class); // Product CRUD using ProductController
    });
});

// Default route (Login page)
Route::get('/', [AuthController::class, 'showLogin'])->name('login');

// User Product Routes
Route::middleware('auth')->group(function () {
    // View individual product details
    Route::get('/product/{id}', [UserController::class, 'showProductDetails'])->name('product.details');
});
