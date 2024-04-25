<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';







// SHOP VISITORS PAGE
Route::get('/', function () {
    
    // Session::flash('error', 'There was an error');
    // Session::flash('success', 'success');

    return view('visitors.index');
})->name('home');

Route::get('/shop', function () {
    return view('visitors.shop');
})->name('shop');

Route::get('/detail', function () {
    return view('visitors.detail');
})->name('details');

Route::get('/cart', function () {
    return view('visitors.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('visitors.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('visitors.contact');
})->name('contact');

