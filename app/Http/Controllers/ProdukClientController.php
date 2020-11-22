<?php 


namespace App\Http\Controllers;
use App\Models\ProdukClient;

class ProdukClientController extends Controller{
	function index(){
		$data['list_produkclient'] = ProdukClient::all();
		return view('client.index', $data);
	}
	function create(){
		return view('client.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stock = request('stock');
		$produk->size = request('size');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('client')->with('success', 'Data berhasil ditambah');
	}
	function show(ProdukClient $produk){
		$data['produk'] = $produk;
		return view('client.show', $data);
	}
	function edit(ProdukClient $produk){
		$data['produk'] = $produk;
		return view('client.edit', $data);
	}
	function update(ProdukClient $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stock = request('stock');
		$produk->size = request('size');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('client')->with('success', 'Data berhasil diedit');
	}
	function destroy(ProdukClient $produk){
		$produk->delete();

		return redirect('client')->with('danger', 'Data berhasil dihapus');
	}
	function filter(){
		$nama = request('nama');
		$size = request('size');
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_promo'] = Promo::whereIn('diskon', $diskon)->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::where('stock', '<>', $stock)->get();
		// $data['list_produk'] = Produk::whereNotIn('stock', $stock)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::whereNull('stock')->get();
		// $data['list_produk'] = Produk::whereNotNull('stock')->get();
		// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-11')->get();
		// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->whereYear('created_at', '2019')->get();
		// $data['list_produk'] = Produk::whereTime('created_at', '03:30:22')->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stock', [10])->whereYear('created_at', '2020')->get();
		$data['list_produkclient'] = ProdukClient::where('nama', 'like', "%$nama%")->where('size', [$size])->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['size'] = request('size');
		return view('client.index', $data);
		// $nama = request('nama');
		// $data['list_promo'] = Promo::where('nama', 'like', "%$nama%")->get();
		// $data['nama'] = $nama;
		// return view('promo.index', $data);
	}
}