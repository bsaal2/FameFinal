@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Albums</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Albums</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =============== blog container ============== -->
		<article class="blog-variation-container blog_three">
			<div class="container">
				<div class="row">
          @foreach($gallary as $gallary)
					<div class="col-lg-6 col-md-6 blog_single_post">
						<div class="img_holder">
							<img class="img-responsive" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$gallary->file}}" alt="{{$gallary->file}}">
							<div class="img_overlay"><a href="{{url('image/'.$gallary->name)}}"><i class="fa fa-link"></i></a></div>
							<p><span>02</span>july</p>
						</div>
						<p>{{$gallary->name}}</p>
					</div>
         @endforeach

				</div> <!-- End row -->
			</div> <!-- End container -->
		</article>

<!-- =============== /blog container ============== -->

<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
