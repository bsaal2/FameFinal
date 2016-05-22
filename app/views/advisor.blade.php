@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Advisors</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Advisors</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->

<!-- ========== Meet Our Advisors ============ -->
		<section class="our_advisor_inner_sec">
			<div class="container">
				<div class="row advisor_inner_title">
					<h2>Meet Our Advisors</h2>
           @foreach($content as $content)
					<p>{{$content->content}}</p>
					@endforeach
				</div>
			</div>
			<div class="container-fluid"> <!-- For background-color -->
				<div class="container">
					<div class="row advisor_profile caption-style-3">

						@foreach($advisor as $advisor)
						<div class="col-lg-3 col-md-3 col-sm-6 profile">
							<img class="img-responsive" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$advisor->file}}" alt="images">
							<div class="caption_bg">
								<a href="{{url('singleadvisor/'.$advisor->id)}}">
									<h4>{{$advisor->name}}</h4>
									<span>{{$advisor->work}}</span>
								</a>
								<p>{{$advisor->overview}}</p>
								<ul>
									<li><a href="{{$advisor->facebooklink}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{$advisor->twitterlink}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{$advisor->googlepluslink}}"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="{{$advisor->linkedinlink}}"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<div class="caption">
								<div class="blur"><div class="border"></div></div>
								<div class="caption-text">
									<a href="{{url('singleadvisor/'.$advisor->id)}}">
										<h4>{{$advisor->name}}</h4>
										<span>{{$advisor->work}}</span>
									</a>
									<p>{{$advisor->overview}}</p>
									<ul>
										<li><a href="{{$advisor->facebooklink}}"><i class="fa fa-facebook"></i></a></li>
										<li><a href="{{$advisor->twitterlink}}"><i class="fa fa-twitter"></i></a></li>
										<li><a href="{{$advisor->googlepluslink}}"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="{{$advisor->linkedinlink}}"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
           @endforeach

				</div> <!-- End row -->

				</div> <!-- End container -->
			</div> <!-- End container-fluid -->
		</section>
<!-- ========== /Meet Our Advisors ============ -->
<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
