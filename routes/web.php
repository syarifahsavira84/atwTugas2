<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login2', function () {
    return view('login2');
});

Route::get('beranda2', function () {
    return view('beranda2');
});

Route::get('produk2', function () {
    return view('produk2');
});

Route::get('kategori2', function () {
    return view('kategori2');
});

Route::get('promo2', function () {
    return view('promo2');
});

Route::get('beranda', [HomeController::class, 'showBeranda'] );
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('pemasok', [HomeController::class, 'showPemasok']);
Route::get('login', [AuthController::class, 'showLogin']);


