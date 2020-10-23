<?php

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

Route::get('/layout2', function () {
    return view('layouts.layout2');
 });

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/beranda2', function () {
    return view('beranda2');
});

Route::get('/produk2', function () {
    return view('produk2');
});

Route::get('/kategori2', function () {
    return view('kategori2');
});

Route::get('/promo2', function () {
    return view('promo2');
});
