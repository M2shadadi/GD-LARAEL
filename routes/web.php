<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');
Route::get('/addproducts', function () {
    return view('/addproducts');
})->name('addproducts');

Route::get('/products', function () {
    return view('/products');
})->name('products');

Route::get('/product_in', function () {
    return view('/product_in');
})->name('product_in');
