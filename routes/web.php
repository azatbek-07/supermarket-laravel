<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Home page
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


