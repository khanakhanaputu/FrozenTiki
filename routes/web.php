<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', fn()=> view('latihan.tesview'));

// Route::get('/produk', [ProdukController::class, 'index']);
// Route::get('/produk/jenis/{jenis}', [ProdukController::class, 'show']);
