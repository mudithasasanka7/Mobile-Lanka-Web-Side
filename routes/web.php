<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;

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
    Route::prefix('admin')->middleware('isAdmin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Add other admin routes (for adding/editing products, etc.)
    });
});

// Default route (Login page)
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
