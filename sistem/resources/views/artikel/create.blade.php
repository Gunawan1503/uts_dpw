@extends('templateAdmin.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-dark mt-3">
					<div class="card-header">
						Tambah Data Artikel Blog
					</div>
					<div class="card-body">
						<form action="{{url('Admin/Artikel')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Judul</label>
								<input type="text" class="form-control" name="judul">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Deskripsi</label>
								<textarea type="text" class="form-control" name="deskripsi"></textarea>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Gambar</label>
								<input type="file" class="form-control" name="gambar">
							</div>
							<button class="btn btn-dark"><i class="fa fa-save"></i> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection