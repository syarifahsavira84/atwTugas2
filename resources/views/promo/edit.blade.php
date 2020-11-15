
@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Edit Data Promo</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('promo',$promo->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$promo->nama}}"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group" >
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" value="{{$promo->harga}}"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Diskon</label>
									<input type="text" class="form-control" name="diskon" value="{{$promo->diskon}}"></input>
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