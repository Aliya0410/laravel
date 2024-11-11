<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product');
Route::post('/products/{id}/order', [ProductController::class, 'order'])->name('order');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::group(['middleware' => 'auth','role:admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::put('/orders/{id}/approve', [AdminController::class, 'approveOrder'])->name('admin.order.approve');
    Route::put('/orders/{id}/deliver', [AdminController::class, 'deliverOrder'])->name('admin.order.deliver');
});
