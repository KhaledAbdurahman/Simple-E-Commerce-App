<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

//Theme Routes
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
});

// Subscriber Route
Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');

// Contact Form Route
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Products Route
Route::resource('products', ProductController::class);

//----------------------// Authentication Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
