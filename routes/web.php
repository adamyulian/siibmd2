<?php

use Illuminate\Support\Facades\Route;


Route::view('/about', 'about');
Route::view('/contact', 'contact');


Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
