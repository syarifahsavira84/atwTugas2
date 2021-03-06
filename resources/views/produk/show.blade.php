@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Produk</h3>
				</div>
				<hr>
				<div class="card-body">
					<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						Rp.{{number_format($produk->harga)}} |
						Stock : {{$produk->stock}} |
						Berat : {{$produk->berat}} gr |
						Berat : {{$produk->size}} |
						Seller : {{$produk->seller->username}}
					</p>
					<p>
						{!! nl2br($produk->deskripsi) !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection