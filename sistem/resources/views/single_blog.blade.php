@extends('templateClient.base')

@section('content')
	<div class="container blog singlepost">
		<div class="row">
			<article class="col-md-8">
			    <h1 class="page-header sidebar-title">{{$artikel->judul}}</h1>
		        <img src="{{url('public')}}/_srcClient/patros/images/{{$artikel->gambar}}" class="img-responsive" alt="photo" />
		        <hr>
				<div class="row">
					<div class="col-md-12">
						<div class="entry-meta">
							<span><i class="fa fa-calendar-o"></i> {{$artikel->created_at}}</span>
							<span><i class="fa fa-user"></i> Posted by <a href="#">admin</a></span>  
							<span> <i class="fa fa-tag"></i> <a href="#" rel="tag">Audio</a></span>
							<div class="pull-right"><span><i class="fa fa-eye"></i> 184</span> <span><i class="fa fa-comment"></i> 4</span></div>
						</div>
					</div>
				</div>
				<p>{{$artikel->deskripsi}}</p>
				<div class="mysharing">
					<!-- Twitter -->
					<a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
					<!-- Facebook -->
					<a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
					<!-- LinkedIn --> 
					<a href="http://www.linkedin.com/shareArticle?mini=true" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
				</div>

				<!-- Blog Comments -->
				<div class="comments1">
					<div class="well">
						<form action="{{url('Client/Artikel', $artikel->id)}}" method="post">
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text"  style="color: black;" class="form-control" name="nama">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Leave a Comment</label>
								<textarea class="form-control" style="color: black;" rows="3" name="komen"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<hr>
					@foreach($list_komen as $komen)
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{url('public')}}/_srcClient/patros/images/avatar1.png" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">{{$komen->nama}}
									<small>{{$komen->created_at}}</small>
								</h4>
								{{$komen->komentar}}
							</div>
						</div>
					@endforeach
				</div>
			</article>

			{{-- Sidebar --}}
			@include('templateClient.section.sidebar')

		</div>
	</div>

	{{-- Contact --}}
	@include('templateClient.section.contact')

	{{-- Follow --}}
	@include('templateClient.section.follow')

	{{-- Footer --}}
	@include('templateClient.section.footer')

@endsection