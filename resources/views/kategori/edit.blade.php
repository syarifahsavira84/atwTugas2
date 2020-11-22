
@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Kategori</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('admin/kategori',$kategori->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Brand</label>
									<input type="text" class="form-control" name="brand" value="{{$kategori->brand}}"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$kategori->stock}}"></input>
								</div>
							</div>
						</div>
						<button class="btn btn-primary right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection