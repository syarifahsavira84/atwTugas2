<?php  


namespace App\Http\Controllers;

class HomeClientController extends Controller {

	function showBeranda2(){
		return view('beranda2');
	}
	function showProdukClient(){
		return view('produkclient');
	}
	function showKategori2(){
		return view('kategori2');
	}
	function showPromo2(){
		return view('promo2');
	}
}