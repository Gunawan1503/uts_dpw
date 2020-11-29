@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-dark mt-3">
					<div class="card-header">
						Data Artikel Blog
						<a href="{{url('Admin/Artikel/Create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Artikel</a>
					</div>
					<div class="card-body">
						<table class="table text-dark">
							<thead>
								<th>No.</th>
								<th>Aksi</th>
								<th>Judul</th>
								<th>Deskripsi</th>
							</thead>
							<tbody>
								@foreach($list_artikel as $artikel)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
												<a href="{{url('Admin/Artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
												<a href="{{url('Admin/Artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
												@include('templateAdmin.utils.delete', ['url' => url('Admin/Artikel', $artikel->id)])
											</div>
										</td>
										<td>{{$artikel->judul}}</td>
										<td>{{$artikel->deskripsi}}</td>
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