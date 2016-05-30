@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>About Us</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>About us</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->

<!-- ============ Our history ========== -->
    @foreach($about as $about)
		<section class="history_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 left-side">
						<h2>Our History</h2>
						<p>{{$about->history}}</p>
					</div>
					<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 right_side">
						<img class="img-responsive" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$about->file}}" alt="image">
						<h3>Company Mission </h3>
						<p>{{$about->mission}}</p>
					</div>
				</div>
			</div>
		</section>
		@endforeach
<!-- ============ /Our history ========== -->


<!-- ======== Our Advisor ======== -->
		<section class="our_advisor">
			<div class="container">
				<div class="row">
					<h2>Meet Our Advisors</h2>
				</div>
				<div class="row">

					@foreach($advisor as $advisor)
					<div class="col-md-3">
						<div class="single-advisor">
							<div class="img-holder">
								<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$advisor->file}}" alt="{{$advisor->file}}"/>
								<div class="overlay">
									<div class="inner">
										<ul class="social">
											<li><a href="{{$advisor->facebooklink}}"><i class="fa fa-facebook"></i></a></li>
											<li><a href="{{$advisor->twitterlink}}"><i class="fa fa-twitter"></i></a></li>
											<li><a href="{{$advisor->googlepluslink}}"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="{{$advisor->linkedinlink}}"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content-holder hvr-sweep-to-bottom">
								<h4>{{$advisor->name}}</h4>
								<p>{{$advisor->work}}</p>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div> <!-- End container -->
		</section> <!-- End our_advisor -->
<!-- ======== /Our Advisor ======== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
