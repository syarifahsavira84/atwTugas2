
@extends('layouts.admin2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Kategori</h3>
				</div>
				<hr>
				<div class="card-body">
					<h3>{{$kategori->nama}}</h3>
					<hr>
					<p>
						Brand : {{$kategori->brand}} |
						Stock : {{$kategori->stock}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection