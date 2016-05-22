@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Single Advisor</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Single Advisor</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- =============== /Banner =============== -->

<!-- =============== Michale John =============== -->
		<section class="advisor_name container">
			<div class="row">
				<div class="col-lg-4 col-md-4 advisor_img">
					<img class="img-responsive" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$advisor->file}}" alt="image">
					<img class="img-responsive" src="{{URL::asset('assets/images/shadow.png')}}" alt="image">
				</div>
				<div class="col-lg-8 col-md-8 advisor_contact_info">
					<h4>{{$advisor->name}}</h4>
					<p>{{$advisor->overview}}</p>
					<ul>
						<li><i class="fa fa-phone"></i>{{$advisor->phone}}</li>
						<li><i class="fa fa-envelope-o"></i><a href="mailto:{{$advisor->email}}">{{$advisor->email}}</a></li>
					</ul>
				</div>
			</div>
		</section>


<!-- =============== live comment  =============== -->
		<section class="leave_comment_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 comment_title_holder">
						<h2>Leave A Comment</h2>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> <!-- comment form -->
						<form action="#" method="get" id="leave_comment">
							<input class="form-control name" type="text" name="yourname" placeholder="First Name">
							<input class="form-control email" type="email" name="yourmail" placeholder="Email Address">
						    <input class="form-control" type="text" name="yournumber" placeholder="Phone No.">
						    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
						    <button type="submit" class="submit">submit now <i class="fa fa-arrow-circle-right"></i></button>
						</form> <!-- End Comment form -->
					</div>
				</div>
			</div>
		</section>
<!-- =============== /live comment  =============== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
