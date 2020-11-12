<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
	function index(){
		return view('index');
	}
	function create(){
		return view('create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stock = request('stock');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('index');
	}
	function show(){

	}
	function edit(){

	}
	function update(){

	}
	function destroy(){

	}
}