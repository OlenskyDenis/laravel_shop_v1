<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/orderByMark', [HomeController::class, 'orderByMark'])->name('orderByMark');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/orderByPrice', [ShopController::class, 'orderByPrice'])->name('orderByPrice');
