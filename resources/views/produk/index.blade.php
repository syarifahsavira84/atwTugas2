
@extends('layouts.admin2')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-11 mt-5">
			<div class="card">
				<div class="card-header">
					<strong>Filter</strong>
				</div>
				<dir class="card-body">
					<form action="{{url('admin/produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stock</label>
							<input type="text" name="stock" class="form-control" value="{{$stock ?? ""}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Min</label>
									<input type="text" name="harga_min" class="form-control" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Max</label>
									<input type="text" name="harga_max" class="form-control" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</dir>
			</div>
			<br>
			<hr>
			<div class="card">
				<div class="card-header">
					<strong>Data Produk</strong>
					<a href="{{url('admin/produk/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<hr>
				<br>
				<div class="card-body">
					<table class="table">
						<thead>
							<th width="50px" bgcolor="black">No</th>
							<th  bgcolor="black">Nama Produk</th>
							<th width="200px" bgcolor="black">Harga</th>
							<th width="200px" bgcolor="black">Size</th>
							<th width="200px" bgcolor="black">Stock</th>
							<th  colspan="3" bgcolor="black">Aksi</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->size}}</td>
								<td>{{$produk->stock}}</td>
								<td width="20px">
										<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
								</td>
								<td width="20px">
										<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
								</td>
								<td width="20px">
										@include('layouts.utils.delete',['url'=>url('admin/produk', $produk->id)])
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection