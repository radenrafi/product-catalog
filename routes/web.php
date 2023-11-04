<?php

use App\Http\Controllers\GambarProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PencarianController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/produk/{id}', [HomeController::class, 'showProduk']);
Route::get('/produk/kategori/{kategori}', [HomeController::class, 'kategoriProduk']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/hasil', [PencarianController::class, 'proses']);

Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::resource('/produk', ProdukController::class);
    Route::resource('/produk/{produk_id}/gambar', GambarProdukController::class);
});
