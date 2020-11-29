@extends('templateClient.base')

@section('content')

		<section class="container blog">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-8">
		            <h1 class="page-header sidebar-title">
		                List Blog
		            </h1>
		            <!-- First Blog Post -->
		            @foreach($list_artikel as $artikel)
			            <div class="row blogu">
			                <div class="col-sm-4 col-md-4 ">
			                    <div class="blog-thumb">
			                        <a href="{{url('Client/Artikel', $artikel->id)}}">
			                            <img class="img-responsive" src="{{url('public')}}/_srcClient/patros/images/{{$artikel->gambar}}" alt="photo">
			                        </a>
			                    </div>
			                </div>
			                <div class="col-sm-8 col-md-8">
			                    <h2 class="blog-title">
			                        <a href="{{url('Client/Artikel', $artikel->id)}}">{{$artikel->judul}}</a>
			                    </h2>
			                    <p><i class="fa fa-calendar-o"></i>  {{$artikel->created_at}} 
			                        <span class="comments-padding"></span>
			                        <i class="fa fa-comment"></i> 0 comments
			                    </p>
			                    <p>{{$artikel->deskripsi}}</p>
			                </div>
			            </div>
			        @endforeach
		            <hr>
		            <div class="text-center"> 
		                <ul class="pagination"> 
		                    <li class="active"> <a href="#">1</a> </li> 
		                    <li> <a href="#">2</a> </li> 
		                    <li> <a href="#">3</a> </li> 
		                    <li> <a href="#">4</a> </li> 
		                    <li> <a href="#">5</a> </li> 
		                    <li> <a href="#">Next</a> </li> 
		                </ul> 
		            </div>
		        </div>

		        @include('templateClient.section.sidebar')

		    </div>
		</section>

		{{-- Contact --}}
		@include('templateClient.section.contact')

		{{-- Follow --}}
		@include('templateClient.section.follow')

		{{-- Footer --}}
		@include('templateClient.section.footer')
@endsection