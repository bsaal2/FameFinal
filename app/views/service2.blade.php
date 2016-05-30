@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Services Single</h1>
						<ul>
							<li><a href="{{url('home')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Services Single</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
		<section class="side_tab">
			<div class="container">
				<div class="row">
					<div class="white_bg right_side col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
						<div class="tab_details">
						    <!-- Tab panes -->
						    <div class="tab-content right_info">
                               @foreach($service as $service)
								<div class="tab-pane fade row" id="{{$service->id}}">
						      	<img class="img-responsive" src="assets/images/service/9.jpg" alt="image">
						      	<img class="img-responsive hidden-sm hidden-xs" src="assets/images/service/10.jpg" alt="image">
						      	<h2>{{$service->heading}}</h2>
						      	<p>{{$service->content}}</p>
						      </div>
                             @endforeach
						      

						    </div>
						</div> <!-- End tab_details -->

						<div class="clear_fix"></div>
					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->

						<ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                       @foreach($heading as $heading) 
                        <li class="active"><a href="#{{$heading->id}}" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$heading->heading}}</a></li>
                        @endforeach
						</ul>

					  <div class="advisor_side"> <!-- Advisor profile & Download option -->
						<h3>Meet Our Advisior</h3>
						<a class="advisor_info" href="">
							<img class="img-responsive" src="assets/images/service/11.jpg" alt="">
							<p>Merry Michale</p>
						</a>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem</p>
					  </div> <!-- End Advisor profilr-->
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section>


<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
