<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Website.TimeTicker.index');
});

Route::get('/home', function () {
    return view('Website.home.index');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/plans', function () {
    return view('Website.plans.index');
})->name('plans');

Route::get('/affiliates', function () {
    return view('Website.affiliates.index');
})->name('affiliates');

Route::get('/about', function () {
    return view('Website.about.index');
})->name('about');

Route::get('/FAQ', function () {
    return view('Website.FAQ.index');
})->name('FAQ');

Route::get('/contact', function () {
    return view('Website.contact.index');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
