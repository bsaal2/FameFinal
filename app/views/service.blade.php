@extends('layout')
@section('content')


<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Services</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Services</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ======== Service facts ========= -->
		<section class="service_facts">
			<div class="container">
				<div class="row">

					@foreach($service as $service)
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img class="img-responsive" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$service->file}}" alt="{{$service->file}}">
						<a href=""><h3>{{$service->heading}}</h3></a>
						<p>{{$service->content}}</p>
					</div>
					@endforeach

			</div>
		</section>
<!-- ======== /Service facts ========= -->

<!-- ======== Small business ======== -->
		<section class="small_business_sec">
			<div class="business_opacity">
				<div class="container float_right">
					<h2>We are running abroad study programs. </h2>
					<p>We have brought the abroad study program for following country with following preparation classes.</p>
					<ul class="p0">
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Australia</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">USA</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Bangladesh</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">India</a></li>
					</ul>
					<ul class="list_two">
						<li><i class="fa fa-arrow-circle-right"></i><a href="">IELTS</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">GRE</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">GMAT</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">TOEFL</a></li>
					</ul>
				</div> <!-- End container -->
			</div>
		</section> <!-- Edn small_business_sec -->
<!-- ======== /Small business ======== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry regarding related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
