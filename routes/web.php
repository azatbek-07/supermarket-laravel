<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


// Home page
Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');


// Products
Route::get('/products', [ProductsController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductsController::class, 'show'])
    ->name('products.show');


// Contact
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');


// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('home.index');
    Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}/edit', [AdminProductController::class, 'update'])->name('products.edit');
    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products.create', [AdminProductController::class, 'create'])->name('products.create');
    // Store
    Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');


});