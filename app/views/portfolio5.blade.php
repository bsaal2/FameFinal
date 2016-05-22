@extends('layout')
@section('content')


<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Portfolio V5</h1>
						<ul>
							<li><a href="assets/index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Portfolio V5</li>
						</ul>
						
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ======= Latest Work ========= -->
		<section class="latest_work">
			<div class="container latest_work_title">
				<h2>Our Latest Work</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
			</div>
			<div class="work_gallery_five">
				<div class="container project_row">
					<div class="row">
						<div class="menu_list"> <!-- Menu -->
							<ul class="p0">
								<li class="filter active" data-filter="all">All</li>
								<li class="filter" data-filter=".insurance">Insurance plans</li>
								<li class="filter" data-filter=".debit">Debit</li>
								<li class="filter" data-filter=".invoice">Invoice</li>
								<li class="filter" data-filter=".report">Annual Report</li>
							</ul>
						</div>
						<div id="mixitup_list" class="portfolio_five">
							<div class="work_img_five mix debit report">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-1.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-1.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
							<div class="work_img_five mix report ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-2.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-2.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
							<div class="work_img_five mix insurance report invoice">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-3.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-3.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
							<div class="work_img_five mix insurance invoice ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-4.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-4.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
							<div class="work_img_five mix debit invoice insurance">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-5.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-5.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
							<div class="work_img_five mix insurance  ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/v5-6.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="assets/images/pro/v5-6.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- End row -->
				</div> <!-- End project_row -->
			</div> <!-- End work_gallery -->
		</section> <!-- End latest_work -->
<!-- ======= /Latest Work ========= -->


<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related investment  ... We are available</p>
				<a href="">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop