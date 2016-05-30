@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Study Abroad</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Study Abroad</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- ================== Faqs ================ -->
		<section class="faqs_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 pull-right right_side"> <!-- Right Side -->
						<h2>Country we apply for</h2>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit, sed quia non numquam eius modi .</p>

						<div class="tab_option">
							<div class="panel-group tab_option_right" id="accordion">

								@foreach($country as $country)
								<div class="panel panel-default">
										<div class="panel-heading">
								      	<h4 class="panel-title">
									        <a data-toggle="collapse" data-parent="#accordion" href="#{{$country->id}}">
									        	 {{$country->heading}}
									        	<img src="assets/images/icon-bg.png" alt="icon" class="active">
									        	<img src="assets/images/icon-bg-hover.png" alt="icon" class="hover">
									    	</a>
								      	</h4>
								    </div>
								    <div id="{{$country->id}}" class="panel-collapse collapse">
								      	<div class="panel-body">
									      	<h3>{{$country->title}}</h3>
									      	<p>{{$country->content1}}</p>
									      	<p><img src="assets/images/16.jpg" alt="{{$country->file}}">{{$country->content2}}</p>
								    	</div>
								    </div>
								</div>
                @endforeach

							</div> <!-- End tab_option_right -->
						</div> <!-- End tab_option -->
						<h2>Test Preparation</h2>
						<div class="tab_option">
							<div class="panel-group" id="accordion_two_two">

									@foreach($test as $test)
									<div class="panel panel-default">
								    <div class="panel-heading">
								      <h4 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion_two" href="#{{str_limit($test->title,$limit=3,$end='')}}">
								        	 {{$test->heading}}
								        	<img src="assets/images/icon-bg.png" alt="icon" class="active">
								        	<img src="assets/images/icon-bg-hover.png" alt="icon" class="hover">
								    	</a>
								      </h4>
								    </div>
								    <div id="{{str_limit($test->title,$limit=3,$end='')}}" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<h3>{{$test->title}}</h3>
								      	<p>{{$test->content1}}</p>
								      	<p><img src="assets/images/16.jpg" alt="{{$test->file}}">{{$test->content2}}</p>
								      </div>
								  </div>
								</div>
                @endforeach

							</div>
						</div> <!-- End tab_option -->
					</div> <!-- End Right Side -->
					<div class="col-lg-4 col-md-4 col-sm-12 pull-left left_side"> <!-- Left Side -->

						<h4>About Us</h4>
             @foreach($about as $about)
						<p>{{$about->history}}</p>
						@endforeach

						<h4>Latest News</h4>
						<ul class="p0 post_item">
              @foreach($news as $news)
							<li>{{$news->created_at}}<a href="{{url('news')}}">{{$news->heading}}</a></li>
              @endforeach
						</ul>
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
			</div> <!-- End container -->
		</section>
<!-- ================== /Faqs ================ -->
<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop
