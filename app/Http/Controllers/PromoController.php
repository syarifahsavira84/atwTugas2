<?php 


namespace App\Http\Controllers;
use App\Models\Promo;

class PromoController extends Controller{
	function index(){
		$data['list_promo'] = Promo::all();
		return view('promo.index', $data);
	}
	function create(){
		return view('promo.create');
	}
	function store(){
		$promo = new Promo;
		$promo->nama = request('nama');
		$promo->harga = request('harga');
		$promo->diskon = request('diskon');
		$promo->save();

		return redirect('admin/promo')->with('success', 'Data berhasil ditambah');
	}
	function show(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.show', $data);
	}
	function edit(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.edit', $data);
	}
	function update(Promo $promo){
		$promo->nama = request('nama');
		$promo->harga = request('harga');
		$promo->diskon = request('diskon');
		$promo->save();

		return redirect('admin/promo')->with('success', 'Data berhasil diedit');
	}
	function destroy(Promo $promo){
		$promo->delete();

		return redirect('admin/promo')->with('danger', 'Data berhasil dihapus');
	}
	function filter(){
		$nama = request('nama');
		$data['list_promo'] = Promo::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('promo.index', $data);
	}
}