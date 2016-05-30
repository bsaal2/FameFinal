@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Events</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Events</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =============== blog container ============== -->
		<article class="blog-container faqs_sec blog-two"> <!-- faqs_sec use for style side content -->
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 white-left right-side ptb-13">
						<!-- .single-blog-post -->
            @foreach($event as $event)
						<div class="single-blog-post">
							<!-- .img-holder -->
							<div class="img-holder">
								<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$event->file}}" alt="{{$event->file}}">
								<div class="overlay"><a href=""><i class="fa fa-link"></i></a></div>
							</div><!-- /.img-holder -->
							<!-- .post-meta -->
							<div class="post-meta">
								<div class="date-holder">
									<span>09</span> Dec
								</div>
								<div class="title-holder">
									<h2 class="title">{{$event->heading}}</h2>
									<ul>
										<li><a href="#">Posted By: Admin </a></li>
										<li><a href="#">Categories: {{$event->category}}</a></li>
									</ul>
								</div>
							</div><!-- /.post-meta -->
							<!-- .content -->
							<div class="content">
								<p>{{$event->content}}</p>

								<a href="" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
							</div><!-- /.content -->
						</div>
						<!-- .single-blog-post -->
          @endforeach



					</div> <!-- End right-side -->
					<div class="col-lg-4 col-md-4 col-sm-12 left_side blog_right_container"> <!-- Left Side -->
						<h4>Search</h4>
						<form action="#">
							<input type="text" placeholder="Enter Search Keywords">
							<button type="submit"><span class="icon icon-Search"></span></button>
						</form>
						<h4>About Us</h4>
            @foreach($about as $about)
						<p>{{$about->history}}</p>
						@endforeach

						<h4>Our Services</h4>
						<ul class="p0 category_item">
							@foreach($service as $service)
							<li><a href=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$service->heading}}</a></li>
							@endforeach
						</ul>

						@foreach($advisor as $advisor)
						<h4>Meet Our Advisior</h4>
						<a class="img_holder" href="{{url('singleadvisor/'.$advisor->id)}}"><img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$advisor->file}}" alt="{{$advisor->file}}"></a>
						<h5><a href="{{url('singleadvisor/'.$advisor->id)}}">{{$advisor->name}}</a></h5>
						<p>{{$advisor->overview}}</p>
             @endforeach

						<h4>Menus</h4>
						<ul class="p0 clouds">
							<li><a href="">Home</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Study Abroad</a></li>
							<li><a href="">Our advisors</a></li>
						</ul>
					</div> <!-- End left side -->
				</div> <!-- End row -->
			</div>
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
