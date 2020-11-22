
@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4>Tambah Data Pelanggan</h4>
				</div>
				<hr>
				<div class="card-body">
					<form action="{{url('admin/pelanggan')}}" method="post">
						@csrf
						<div class="form-group" >
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama"></input>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control">
										<option value="">--Pilih Jenis Kelamin--</option>
									  <option value="laki-laki">Laki-laki</option>
									  <option value="perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group" >
									<label for="" class="control-label">Alamat</label>
									<input type="text" class="form-control" name="alamat"></input>
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