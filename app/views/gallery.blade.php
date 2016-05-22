@extends('layout')
@section('content')

<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Gallery</h1>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>gallery</li>
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
			<div class="work_gallery">
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
						<div id="mixitup_list">
							<div class="col-lg-6 work_img mix debit report">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/1.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="images/pro/1.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/1.jpg" class="fancybox">Anual Company Growth <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix insurance report ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/2.jpg" alt="image" title="Estelle Solution">
									<div class="gallery_mask_hover">
										<a href="images/pro/2.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/2.jpg" class="fancybox">Estelle Solution <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix insurance report invoice">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/3.jpg" alt="image" title="Estelle Solution">
									<div class="gallery_mask_hover">
										<a href="images/pro/3.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/3.jpg" class="fancybox">Estelle Solution <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix insurance invoice ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/4.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="images/pro/4.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/4.jpg" class="fancybox">Anual Company Growth <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix debit invoice">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/5.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="images/pro/5.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/5.jpg" class="fancybox">Anual Company Growth <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix insurance invoice ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/6.jpg" alt="image" title="Estelle Solution">
									<div class="gallery_mask_hover">
										<a href="images/pro/6.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/6.jpg" class="fancybox">Estelle Solution <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix debit report ">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/7.jpg" alt="image" title="Estelle Solution">
									<div class="gallery_mask_hover">
										<a href="images/pro/7.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/7.jpg" class="fancybox">Estelle Solution <br><span>Debit/Invoicing</span></a>
							</div>
							<div class="col-lg-6 work_img mix debit report">
								<div style="display:inline-block; padding:0px;" class="mask_holder"><img class="img-responsive" src="images/pro/8.jpg" alt="image" title="Anual Company Growth">
									<div class="gallery_mask_hover">
										<a href="images/pro/8.jpg" class="fancybox"><span>Anual Company Growth</span></a>
									</div>
								</div>
								<a href="images/pro/8.jpg" class="fancybox">Anual Company Growth <br><span>Debit/Invoicing</span></a>
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