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
use App\Http\Controllers\ProdukClientController;

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

Route::get('layout2', function () {
    return view('layouts/layout2');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);


Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('promo/filter', [PromoController::class, 'filter']);
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::post('kategori/filter', [KategoriController::class, 'filter']);
	Route::post('pelanggan/filter', [PelangganController::class, 'filter']);
	Route::post('pemasok/filter', [PemasokController::class, 'filter']);
	Route::post('user/filter', [UserController::class, 'filter']);
	Route::resource('produk', 'ProdukController');
	Route::resource('kategori', 'KategoriController');
	Route::resource('promo', 'PromoController');
	Route::resource('pelanggan', 'PelangganController');
	Route::resource('pemasok', 'PemasokController');
	Route::resource('user', 'UserController');
});

Route::post('client/filter', [ProdukClientController::class, 'filter']);
Route::get('client', [ProdukClientController::class, 'index']);

Route::get('beranda2', [HomeClientController::class, 'showBeranda2']);
Route::get('login2', [Auth2Controller::class, 'showLogin2']);

Route::get('kategori2', [HomeClientController::class, 'showKategori2']);
Route::get('promo2', [HomeClientController::class, 'showPromo2']);
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
