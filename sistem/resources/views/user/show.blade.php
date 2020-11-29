@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-dark mt-3">
					<div class="card-header text-dark">
						Detail Data User
					</div>
					<div class="card-body text-dark">
						<h3>{{$user->nama}}</h3>
						<hr>
						<p>
							{{"@".($user->username)}}  |
							Email : {{$user->email}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection