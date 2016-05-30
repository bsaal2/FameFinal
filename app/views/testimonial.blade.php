@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Our Team</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Our Team</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ============ what our client say =============== -->
		<section class="client_say_about_us">
			<div class="container">
				<div class="row">

					@foreach($left as $left)
					<div class="col-lg-6 col-md-6 col-sm-12 testimonial left_part">
						<img class="round_img" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$left->file}}" alt="images">
						<div class="float_right client_info">
							<p>{{$left->title}}</p>
							<span>{{$left->name}} ({{$left->position}})</span>
							<ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<p class="john_speach clear_fix">{{$left->content}}</p>
						<img class="client_sign" src="assets/images/testimonial/sign.jpg" alt="images">
					</div>
					@endforeach

					@foreach($right as $right)
					<div class="col-lg-6 col-md-6 col-sm-12 testimonial right_part">
						<img class="round_img" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$right->file}}" alt="images">
						<div class="float_right client_info">
							<p>{{$right->title}}</p>
							<span>{{$right->name}} ({{$right->position}})</span>
							<ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<p class="john_speach clear_fix">{{$right->content}}</p>
						<img class="client_sign" src="assets/images/testimonial/sign.jpg" alt="images">
					</div>
          @endforeach

					@foreach($bottomLeft as $bottomLeft)
					<div class="col-lg-6 col-md-6 col-sm-12 testimonial left_part bottom_part">
						<img class="round_img" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$bottomLeft->file}}" alt="images">
						<div class="float_right client_info">
							<p>{{$bottomLeft->title}}</p>
							<span>{{$bottomLeft->name}} ({{$bottomLeft->position}})</span>
							<ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<p class="john_speach clear_fix">{{$bottomLeft->content}}</p>
						<img class="client_sign" src="assets/images/testimonial/sign.jpg" alt="images">
					</div>
           @endforeach

					 @foreach($bottomRight as $bottomRight)
					<div class="col-lg-6 col-md-6 col-sm-12 testimonial right_part bottom_part">
						<img class="round_img" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$bottomRight->file}}" alt="images">
						<div class="float_right client_info">
							<p>{{$bottomRight->title}}</p>
							<span>{{$bottomRight->name}} ({{$bottomRight->position}})</span>
							<ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<p class="john_speach clear_fix">{{$bottomRight->content}}</p>
						<img class="client_sign" src="assets/images/testimonial/sign.jpg" alt="images">
					</div>
           @endforeach

				</div>
			</div>
		</section>
<!-- ============ /what our client say =============== -->
<!-- ============= Client slider ==================== -->
		<section class="client_slider">
			<div class="section_opacity">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 client_img">
							<img class="img-responsive" src="assets/images/testimonial/5.jpg" alt="images">
							<ul class="p0">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<div class="col-lg-8 client_speach">
							<p><i class="fa fa-quote-left"></i>All the students are encouraged to apply here.All the needy and deserving students will be will also be awarded scholarship</p>
							<span>- (Scholarship Committe)</span>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- ============= Client slider ==================== -->
<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
