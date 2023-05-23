<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('auth/login', App\Http\Controllers\Auth\Login\CreateController::class)->name('login');
    Route::post('auth/login', App\Http\Controllers\Auth\Login\StoreController::class);

    Route::get('auth/register', App\Http\Controllers\Auth\Register\CreateController::class)->name('register');
    Route::post('auth/register', App\Http\Controllers\Auth\Register\StoreController::class);
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', App\Http\Controllers\Auth\LogoutController::class);

    Route::get('/', App\Http\Controllers\DashboardController::class)->name('dashboard');
});
