<?php

Route::post('auth/login', App\Http\Controllers\Api\Auth\Login\StoreController::class);
Route::post('auth/register', App\Http\Controllers\Api\Auth\Register\StoreController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::delete('auth/logout', App\Http\Controllers\Api\Auth\Logout\StoreController::class);
});
