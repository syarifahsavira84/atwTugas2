<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\Auth2Controller;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\UserController;

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

Route::get('beranda', [HomeController::class, 'showBeranda']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);

Route::get('promo', [PromoController::class, 'index']);
Route::get('promo/create', [PromoController::class, 'create']);
Route::post('promo', [PromoController::class, 'store']);
Route::get('promo/{promo}', [PromoController::class, 'show']);
Route::get('promo/{promo}/edit', [PromoController::class, 'edit']);
Route::put('promo/{promo}', [PromoController::class, 'update']);
Route::delete('promo/{promo}', [PromoController::class, 'destroy']);

Route::get('pelanggan', [PelangganController::class, 'index']);
Route::get('pelanggan/create', [PelangganController::class, 'create']);
Route::post('pelanggan', [PelangganController::class, 'store']);
Route::get('pelanggan/{pelanggan}', [PelangganController::class, 'show']);
Route::get('pelanggan/{pelanggan}/edit', [PelangganController::class, 'edit']);
Route::put('pelanggan/{pelanggan}', [PelangganController::class, 'update']);
Route::delete('pelanggan/{pelanggan}', [PelangganController::class, 'destroy']);

Route::get('pemasok', [PemasokController::class, 'index']);
Route::get('pemasok/create', [PemasokController::class, 'create']);
Route::post('pemasok', [PemasokController::class, 'store']);
Route::get('pemasok/{pemasok}', [PemasokController::class, 'show']);
Route::get('pemasok/{pemasok}/edit', [PemasokController::class, 'edit']);
Route::put('pemasok/{pemasok}', [PemasokController::class, 'update']);
Route::delete('pemasok/{pemasok}', [PemasokController::class, 'destroy']);

Route::get('beranda2', [HomeClientController::class, 'showBeranda2']);
Route::get('login2', [Auth2Controller::class, 'showLogin2']);
Route::get('produk2', [HomeClientController::class, 'showProduk2']);
Route::get('kategori2', [HomeClientController::class, 'showKategori2']);
Route::get('promo2', [HomeClientController::class, 'showPromo2']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
