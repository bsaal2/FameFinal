@extends('layout')
@section('content')
<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Portfolio V3</h1>
						<ul>
							<li><a href="assets/index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Portfolio V3</li>
						</ul>
						
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ======= Latest Work ========= -->
		<section class="latest_work latest_work_three">
			<div class="container latest_work_title">
				<h2>Our Latest Work</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
			</div>
			<div class="work_gallery_three">
				<div class="container project_row">
					<div class="row">
						<div class="menu_list"> <!-- Menu -->
							<ul class="p0 work_menu">
								<li class="filter active" data-filter="all">All</li>
								<li class="filter" data-filter=".insurance">Insurance plans</li>
								<li class="filter" data-filter=".debit">Debit</li>
								<li class="filter" data-filter=".invoice">Invoice</li>
								<li class="filter" data-filter=".report">Annual Report</li>
							</ul>
						</div>
					</div> <!-- End row -->
				</div> <!-- End project_row -->
				<div id="mixitup_list" class="container-fluid protfolio_img p0">
					<div class="work_img_two mix debit report col-lg-6">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-1.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-1.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix insurance debit report col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-2.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-2.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix insurance invoice col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-4.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-4.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix debit invoice report col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-5.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-5.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix insurance invoice col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-6.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-6.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix debit report col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-7.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-7.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
					<div class="work_img_two mix debit insurance report col-lg-3">
						<div class="fancybox mask_holder" style="display:inline-block; padding:0px;"><img class="img-responsive" src="images/pro/v3-8.jpg" alt="image" title="Anual Company Growth">
							<div class="gallery_mask_hover">
								<a href="assets/images/pro/v3-8.jpg"><span>Anual Company Growth</span></a>
							</div>
						</div>
					</div>
				</div>	
			</div> <!-- End work_gallery -->
		</section> <!-- End latest_work -->
<!-- ======= /Latest Work ========= -->

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
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="assets/">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
@stop