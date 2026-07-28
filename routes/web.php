<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;


// ====================
// Public (hamma kira oladi)
// ====================

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/products', [ProductsController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductsController::class, 'show'])
    ->name('products.show');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');


// ====================
// Faqat Login qilganlar
// ====================

Route::middleware('auth')->group(function () {
    //
});


// ====================
// Faqat Login qilmaganlar
// ====================

Route::middleware('guest')->group(function () {

    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', fn() => view('auth.register'))->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

 

});


// ====================
// Admin
// ====================

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('home.index');

    Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');

    Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');

    Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');

    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');

    Route::put('/products/{id}', [AdminProductController::class, 'update'])->name('products.update');

    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');

});