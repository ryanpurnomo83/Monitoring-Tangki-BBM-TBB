<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function() {
    return view('/ADMIN/splash');
});

Route::get('/signup', [
    AdminController::class,
    'SignUp'
])->name('signup');

Route::get('/signin', [
    AdminController::class,
    'SignIn'
])->name('signin');

Route::get('/dashboard', [
    AdminController::class,
    'Dashboard'
])->name('dashboard');

Route::get('/message', [
    AdminController::class,
    'Message'
])->name('message');