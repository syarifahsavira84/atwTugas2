@extends('layouts.admin2')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-14">
			<div class="card">
				<div class="card-header">
					<h3>Data Produk</h3>
					<a href="{{url('create')}}" class="btn btn-primary left"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table>
						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection