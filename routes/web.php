<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Auth routes without register
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/masterproduk', [App\Http\Controllers\MasterProdukController::class, 'index'])->name('masterproduk.index');
    Route::get('/uploadpesanan', [App\Http\Controllers\UploadPesananController::class, 'index'])->name('uploadpesanan.index');
    Route::get('/instok', [App\Http\Controllers\InStokController::class, 'index'])->name('instok.index');
});
