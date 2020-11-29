@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-dark mt-3">
					<div class="card-header">
						Detail Artikel Blog
					</div>
					<div class="card-body">
						<img src="{{url('public')}}/_srcClient/patros/images/{{$artikel->gambar}}">
						<hr>
						<h3>{{$artikel->judul}}</h3>
						<hr>
						<p>
							{!! nl2br($artikel->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection