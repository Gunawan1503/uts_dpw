@extends('templateClient.base')

@section('content')
		<!-- Header Carousel -->
		@include('templateClient.section.carousel')
			
		{{-- About Section --}}
		@include('templateClient.section.about')
		
		{{-- Services Section --}}
		@include('templateClient.section.services')

		{{-- BlogHome --}}
		@include('templateClient.section.bloglist')

		{{-- Team --}}
		@include('templateClient.section.team')

		{{-- Contact --}}
		@include('templateClient.section.contact')

		{{-- Follow --}}
		@include('templateClient.section.follow')

		{{-- Footer --}}
		@include('templateClient.section.footer')
@endsection