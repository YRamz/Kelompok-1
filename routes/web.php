<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/crud', MahasiswaController::class);

Route::resource('post', PostController::class);

Route::resource('produk', ProdukController::class);