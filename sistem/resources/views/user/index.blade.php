@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-dark mt-3">
					<div class="card-header text-dark">
						Data User
						<a href="{{url('Admin/User/Create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-dark">
								<th>No.</th>
								<th>Aksi</th>
								<th width="300px">Username</th>
								<th>Nama</th>
								<th width="200px">Email</th>
							</thead>
							<tbody class="text-dark">
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('Admin/User', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i> </a>
											<a href="{{url('Admin/User', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('templateAdmin.utils.delete', ['url' => url('Admin/User', $user->id)])
										</div>
									</td>
									<td>{{$user->username}}</td>
									<td>{{$user->nama}}</td>
									<td>{{$user->email}}</td>
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