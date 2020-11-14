@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Pemasok</h3>
				</div>
				<hr>
				<div class="card-body">
					<h3>{{$pemasok->nama}}</h3>
					<hr>
					<p>
						Jenis Kelamin : {{$pemasok->jenis_kelamin)}} |
						Alamat : {{$pemasok->alamat}} 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection