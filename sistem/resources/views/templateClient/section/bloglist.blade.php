 		<section id="bloghome">
			<div class="container">
				<div class="text-center"><h2>Latest Blog Posts</h2>
					<img class="img-responsive displayed" src="{{url('public')}}/_srcClient/patros/images/short.png" alt="about">
				</div>
				<div class="row">
					<div class="col-md-12 homeport1">
						@foreach($list_artikel as $artikel)
							<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
								<figure class="effect-oscar">
									<img src="{{url('public')}}/_srcClient/patros/images/{{$artikel->gambar}}" alt="img09" class="img-responsive" />
									<figcaption>
										<h2>{{$artikel->judul}}</h2>
										<a href="{{url('Client/Artikel', $artikel->id)}}">View more</a>
									</figcaption>           
								</figure>
								<p class="text-center">{{$artikel->deskripsi}}</p>
								<div class="text-center"><a class="btn btn-primary btn-noborder-radius" href="{{url('Client/Artikel', $artikel->id)}}">Read More</a></div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>