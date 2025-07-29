<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\LoginForm;

Route::get('/login', function () {
    return view('login');
})->name('login');

use App\Livewire\RegisterForm;

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
