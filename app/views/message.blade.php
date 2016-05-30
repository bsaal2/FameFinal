@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Message</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Message</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ======= Latest Work ========= -->
		<section class="latest_work latest_work_two">
			<div class="container latest_work_title">
				@foreach($msg as $msg)
				<img class="img-thumbnail" alt="{{$msg->file}}" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$msg->file}}" />
				<h2>{{$msg->heading}}</h2>
				<p>{{$msg->content}}</p>
		   @endforeach
			</div>
		</section> <!-- End latest_work -->

<!-- ======= /Latest Work ========= -->
<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
