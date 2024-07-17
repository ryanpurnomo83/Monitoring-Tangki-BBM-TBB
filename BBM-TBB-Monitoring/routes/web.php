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

Route::get('/users', [
    AdminController::class,
    'Users'
])->name('users');

Route::get('/dashboard', [
    AdminController::class,
    'Dashboard'
])->name('dashboard');

Route::get('/message', [
    AdminController::class,
    'Message'
])->name('message');

Route::get('/messagedetail', [
    AdminController::class,
    'DetailMessage'
])->name('messagedetail');

Route::get('/orders', [
    AdminController::class,
    'Orders'
])->name('orders');

Route::get('/settings', [
    AdminController::class,
    'Settings'
])->name('settings');