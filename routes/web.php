<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Custom routes for views

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop_details', function () {
    return view('shop_details');
})->name('shop_details');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

// Error pages

Route::fallback(function () {
    return view('404');
});

// Load auth routes
require __DIR__ . '/auth.php';




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard')->middleware('auth:admin');

    // Password reset routes
    Route::get('password/reset', [AdminAuthController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [AdminAuthController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [AdminAuthController::class, 'reset'])->name('password.update');
});


// Password reset routes for admin
Route::get('password/reset', [AdminAuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AdminAuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AdminAuthController::class, 'reset'])->name('password.update');

Route::prefix('admin/products')->name('admin.products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/shop/details/{product}', [ProductController::class, 'show'])->name('shop_details');
Route::get('/shop/product/{product}', [ProductController::class, 'show'])->name('shop.product.show');
Route::get('/filter-products', [ProductController::class, 'filterProducts'])->name('filter.products');


Route::middleware('auth')->group(function () {
    Route::post('cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
});
Route::patch('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
