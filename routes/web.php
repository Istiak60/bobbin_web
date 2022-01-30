<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/hh', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('template.index-9');
});
Route::get('/about-2', function () {
    return view('template.about-2');
});
Route::get('/blog', function () {
    return view('template.blog-grid-2cols');
});
Route::get('/cart', function () {
    return view('template.cart');
});
Route::get('/category', function () {
    return view('template.category');
});
Route::get('/checkout', function () {
    return view('template.checkout');
});
Route::get('/coming-soon', function () {
    return view('template.coming-soon');
});
Route::get('/contact', function () {
    return view('template.contact');
});
Route::get('/faq', function () {
    return view('template.faq');
});
Route::get('/login', function () {
    return view('template.login');
});
Route::get('/product-category-boxed', function () {
    return view('template.product-category-boxed');
});

Route::get('/product-fullwidth', function () {
    return view('template.product-fullwidth');
});

Route::get('/product-extended', function () {
    return view('template.product-extended');
});
Route::get('/product-gallery', function () {
    return view('template.product-gallery');
});
Route::get('/product', function () {
    return view('template.product');
});

Route::get('/single-fullwidth', function () {
    return view('template.single-fullwidth');
});

Route::get('/wishlist', function () {
    return view('template.wishlist');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
