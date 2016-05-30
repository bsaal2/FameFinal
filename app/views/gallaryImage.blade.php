@extends('layout')
@section('content')


<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Images</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Images</li>
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

          @foreach($image as $image)
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img class="img-responsive" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$image->file}}" alt="images">
						<p class="text-center"><strong>{{$image->caption}}</strong></p>
          </div>
          @endforeach
          
       </div>
			</div>
		</section>
<!-- ======== /Service facts ========= -->

<!-- ======== Small business ======== -->
		<section class="small_business_sec">
			<div class="business_opacity">
				<div class="container float_right">
					<h2>WE helaping small business</h2>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,  adipis civelit sed quia non qui dolorem ipsum quia dolor</p>
					<ul class="p0">
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Audit & Assurance</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Business Services</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">IT Control Solutions</a></li>
					</ul>
					<ul class="list_two">
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Tax Advisory Services</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Year-End Tax Planning</a></li>
						<li><i class="fa fa-arrow-circle-right"></i><a href="">Financial Planning</a></li>
					</ul>
				</div> <!-- End container -->
			</div>
		</section> <!-- Edn small_business_sec -->
<!-- ======== /Small business ======== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
