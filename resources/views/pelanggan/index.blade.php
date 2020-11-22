
@extends('layouts.admin2')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
			<div class="card-header">
					<strong>Filter</strong>
				</div>
				<dir class="card-body">
					<form action="{{url('admin/pelanggan/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$nama ?? ""}}">
						</div>
						<button class="btn btn-primary right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</dir>
			</div>
			<br>
			<hr>
			<div class="card">
				<div class="card-header">
					<h4>Data Produk</h4>
					<a href="{{url('admin/pelanggan/create')}}" class="btn btn-primary right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<br><br><br>
				<div class="card-body">
					<table class="table">
						<thead>
							<th width="50px" bgcolor="black">No</th>
							<th  bgcolor="black">Nama Pelanggan</th>
							<th width="200px" bgcolor="black">Jenis Kelamin</th>
							<th width="200px" bgcolor="black">Alamat</th>
							<th colspan="3" bgcolor="black">Aksi</th>
						</thead>
						<tbody>
							@foreach($list_pelanggan as $pelanggan)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$pelanggan->nama}}</td>
								<td>{{$pelanggan->jenis_kelamin}}</td>
								<td>{{$pelanggan->alamat}}</td>
								<td width="20px">
										<a href="{{url('admin/pelanggan', $pelanggan->id)}}" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
								</td>
								<td width="20px">
										<a href="{{url('admin/pelanggan', $pelanggan->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
								</td>
								<td width="20px">
										@include('layouts.utils.delete',['url'=>url('admin/pelanggan', $pelanggan->id)])
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