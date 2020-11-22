
@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Produk</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('admin/produk',$produk->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}"></input>
						</div>
						<div class="form-group" >
							<label for="" class="control-label">Harga</label>
							<input type="text" class="form-control" name="harga" value="{{$produk->harga}}"></input>
						</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat" value="{{$produk->berat}}"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Size</label>
									<input type="text" class="form-control" name="size"  value="{{$produk->size}}"></input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$produk->stock}}"></input>
								</div>
							</div>
						<div class="form-group" >
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">
								{{$produk->deskripsi}}
							</textarea>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection