@extends('layout')
@section('content')

<!-- ======= revolution slider section ======= -->
	<section class="rev_slider_wrapper me-fin-banner">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
        @foreach($slider as $slider)
				<li data-transition="fade">
					<img src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$slider->file}}"  alt="{{$slider->file}}">
					<div class="tp-caption sfb tp-resizeme banner-h1"
				        data-x="left" data-hoffset="380"
				        data-y="top" data-voffset="290"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="500">
						{{$slider->heading}}
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-border"
				        data-x="left" data-hoffset="380"
				        data-y="top" data-voffset="400"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="800">
						<span></span>
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-text"
				        data-x="left" data-hoffset="380"
				        data-y="top" data-voffset="435"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1100">
						<p>{{$slider->content}}</p>
				    </div>
					<div class="tp-caption sfl tp-resizeme "
				        data-x="left" data-hoffset="380"
				        data-y="top" data-voffset="510"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1400">
						<a class="banner-button" href="">Contact Us <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
					<div class="tp-caption sfr tp-resizeme "
				        data-x="left" data-hoffset="580"
				        data-y="top" data-voffset="510"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1700">
						<a class="banner-button blue-bg" href="">View More <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
				</li>
       @endforeach
			</ul>
		</div>
	</section>
<!-- ======= /revolution slider section ======= -->


<!-- ======= Welcome section ======= -->
		<section class="welcome_sec">
			<div class="container">
				<div class="row welcome_heading">
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						<h2>We offer <br>Different Services</h2>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
						<p>We are the education providing team.We offer many quality education services to the keen and needy students.Our services are described below.</p>
					</div>
				</div> <!-- End Row -->
				<div class="row welcome welcome_details">
					<div class="col-lg-6 col-md-12">
						<div class="welcome_item">
							<img src="assets/images/wods1.jpg" alt="images">
							<div class="welcome_info">
								<h3>Advance Science Course</h3>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
							</div>
						</div>
						<div class="welcome_item welcome_item_bottom">
							<img src="assets/images/wods2.jpg" alt="images">
							<div class="welcome_info">
								<h3>A-Level Bridge Course</h3>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 bottom_row">
						<div class="welcome_item">
							<img src="assets/images/wods3.jpg" alt="images">
							<div class="welcome_info">
								<h3>Staff Nurse Preparation</h3>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
							</div>
						</div>
						<div class="welcome_item welcome_item_bottom">
							<img src="assets/images/wods4.jpg" alt="images">
							<div class="welcome_info">
								<h3>Advanced Management Course</h3>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
							</div>
						</div>
					</div>
				</div> <!-- End Row -->
			</div> <!-- End container -->
		</section> <!-- End welcome_sec -->
<!-- ======= /Welcome section ======= -->

<!-- ======= Who We Are ======= -->
		<section class="we_are">
			<div class="left_side float_left">
				<div class="we_are_opacity">
					<div class="we_are_border">
						<h2>We are E.s.t 2005</h2>
					</div>
				</div>
			</div> <!-- End Left_Side -->
			<div class="right_side float_right">
				<div class="we_are_deatails">
					<h2>Who We Are</h2>
					<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>  <br>

					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div class="list_item">
						<img src="assets/images/icon-1.png" alt=""><p>Dedicated <br>Team</p>
						<img src="assets/images/icon-2.png" alt=""><p>Best <br>Advisors</p>
						<img src="assets/images/icon-3.png" alt=""><p class="support">24/7 <br>Supports</p>
					</div>
				</div>
			</div> <!-- End right_side -->
		</section> <!-- End Who We Are -->
<!-- ======= /Who We Are ======= -->

<!-- ======= Testimonial & Company Values ======= -->
		<section class="testimonial_sec clear_fix">
			<div class="container">
				<div class="row">
					<div  class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonial_container">
						<div class="sec-title">
							<h2>Testimonials</h2>
						</div>
						<div id="owl">

              @foreach($testimonial as $testimonial)
							<div>
								<div class="testimonial">
									<img class="round_img" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$testimonial->file}}" alt="images">
									<div class="float_right client_info">
										<p>{{$testimonial->title}}</p>
										<span>{{$testimonial->name}} ({{$testimonial->position}})</span>
										<ul>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
										</ul>
									</div>
								</div>
								<p class="john_speach">{{str_limit($testimonial->content,$limit=300)}}</p>
								<img src="assets/images/sign.jpg" alt="images">
							</div>
              @endforeach

						</div> <!-- End owl -->
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 company">
						<h2>Our Company Values</h2>
						<div class="company-tab">
							<ul class="nav nav-pills nav-justified">
							    <li class="active"><a data-toggle="pill" href="#menu1">Quality</a></li>
							    <li><a data-toggle="pill" href="#menu2">Commitment</a></li>
							    <li><a data-toggle="pill" href="#menu3">Success</a></li>
						  	</ul>

							 <div class="tab-content">
							    <div id="menu1" class="tab-pane fade in active">
							      <h3>Our Company Quality</h3>
							      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
							      <ul class="p0">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							      <ul class="list-two">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							    </div>
							    <div id="menu2" class="tab-pane fade">
							      <h3>Our Company Quality</h3>
							      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
							      <ul class="p0">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							      <ul class="list-two">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							    </div>
							    <div id="menu3" class="tab-pane fade">
							      <h3>Our Company Quality</h3>
							      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
							      <ul class="p0">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							      <ul class="list-two">
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Our Company Growth</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">1000 Employed</a></li>
							      	<li><i class="fa fa-arrow-circle-right"></i><a href="">Customer Relationship</a></li>
							      </ul>
							    </div>
							 </div>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End Container -->
		</section> <!-- testimonial -->
<!-- ======= /Testimonial & Company Values ======= -->

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

<!-- ======== Some Facts ======== -->
		<section class="some_facts hidden-xs">
			<div class="container">
				<span class="timer" data-from="1" data-to="12" data-speed="5000" data-refresh-interval="50">12</span><p>Years of <br>Experiences</p>
				<span class="timer" data-from="10" data-to="54" data-speed="5000" data-refresh-interval="50">54</span><p>Quality <br>Teacher</p>
				<span class="timer"  data-from="10" data-to="40" data-speed="5000" data-refresh-interval="50">40</span><p>new enrollment <br>every year</p>
				<span class="timer" data-from="10" data-to="89" data-speed="5000" data-refresh-interval="50">89</span><p class="case">Different <br>Department</p>
			</div>
		</section> <!-- End some_facts -->
<!-- ======== /Some Facts ======== -->


<!-- ======== Our Partner & Get in touch ======== -->
		<section class="container-fluid partner_touch_sec">
			<div class="container">
				<div class="row">
					<div class="our_partner col-lg-6 col-md-7">
						<h2>Our Partners</h2>

						@foreach($partnerContent as $partnerContent)
						<p>{{$partnerContent->content}}</p>
            @endforeach

						<ul>
             @foreach($partnerImage as $partnerImage)
							<li><a href=""><img src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$partnerImage->file}}" alt="{{$partnerImage->file}}"></a></li>
             @endforeach
						</ul>
					</div> <!-- End our_partner -->
					<div class="get_touch col-lg-6 col-md-5 col-sm-12 col-xs-12">
						<h2>Get In Touch</h2>
						<form action="#" method="get">
							<input class="form-control name" type="text" name="yourname" placeholder="Your Name">
							<input class="form-control email" type="email" name="yourmail" placeholder="Your Email">
							<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							   	I like to discuss
							    <i class="fa fa-angle-down"></i>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li>I like to umquam</li>
							    <li>I like to civelit</li>
							    <li>I like to adipis</li>
							    <li>I like to quia</li>
							  </ul>
							</div>
						    <input class="form-control" type="text" name="yournumber" placeholder="Your Phone Number">
						    <button type="submit" class="submit">submit now <i class="fa fa-arrow-circle-right"></i></button>
						</form>
					</div> <!-- End get_touch -->
				</div> <!-- End Row -->
			</div> <!-- End Container -->
		</section> <!-- End container-fluid -->
<!-- ======== /Our Partner & Get in touch ======== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container text-center">
				<p>If you have any querry regarding related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
