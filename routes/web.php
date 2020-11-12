<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('login', [AuthController::class, 'showLogin']);

Route::get('create', [ProdukController::class, 'create']);
Route::get('index', [ProdukController::class, 'index']);
Route::post('index', [ProdukController::class, 'store']);
