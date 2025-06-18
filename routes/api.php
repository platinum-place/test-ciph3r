<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::get('products/{id}/prices', [\App\Http\Controllers\ProductController::class, 'pricesList']);
Route::post('products/{id}/prices', [\App\Http\Controllers\ProductController::class, 'storePrice']);
