<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::get('products/{id}/prices', [\App\Http\Controllers\ProductController::class, 'pricesList']);
    Route::post('products/{id}/prices', [\App\Http\Controllers\ProductController::class, 'storePrice']);
});
