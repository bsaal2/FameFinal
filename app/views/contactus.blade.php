@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Contact Us</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Contact Us</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =================== Contact us container ============== -->
		<section class="contact_us_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
						<h2>Get In Touch With Us</h2>
						<p>You can contact us through message below.<br>Fill up the box below</p>
					</div> <!-- End section title -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
						<form action="includes/sendemail.php" class="contact-form">
							<input class="form-control name" type="text" name="name" placeholder="Your Name">
							<input class="form-control email" type="email" name="email" placeholder="Your Email">
						    <input class="form-control" type="text" name="subject" placeholder="Subject">
						    <textarea name="message" placeholder="Message"></textarea>
						    <button type="submit" class="submit">submit now <i class="fa fa-arrow-circle-right"></i></button>
						</form> <!-- End form holder -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
						<address>
							<div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
							<div class="address_holder float_left">Pokhara-5<br> Nirmal Shanti Niwas <br>Zero Km</div>
						</address>
						<address class="clear_fix">
							<div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
							<div class="address_holder float_left">contact@mefame.com <br>support@mefame.com</div>
						</address>
						<address class="clear_fix">
							<div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
							<div class="address_holder float_left">Phone:061-530819 , 520010<br>Mob:9856039322</div>
						</address>
					</div>
				</div>
			</div>
		</section>

<!-- =================== /Contact us container ============== -->

<!-- =============== google map ============= -->
		<div class="map">
			<div class="google-map" id="contact-google-map" data-map-lat="40.650002" data-map-lng="-73.949997" data-icon-path="images/map-marker.png" data-map-title="Awesome Place" data-map-zoom="12"></div>
		</div>
<!-- =============== /google map ============= -->

@stop
