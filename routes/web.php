<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::resource('/produk', ProdukController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/halaman', HalamanController::class);
Route::resource('/product', ProductController::class);
Route::get('login', [LoginController::class, 'index'])->name('login'); // Menampilkan formulir login
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post'); // Proses autentikasi
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/halaman', [HalamanController::class, 'index'])->name("halaman-index");
