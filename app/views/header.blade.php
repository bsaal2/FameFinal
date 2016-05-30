<!-- =======Header ======= -->
		<header>
			<div class="container-fluid top_header">
				<div class="container">
					<p class="float_left">Welcome to Fame International , we have over 12 years of expertise</p>
					<div class="float_right">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li>
								<div  id="search_box">
									<input id="search" type="text" placeholder="Search here">
									<button id="button" type="submit"><span class="icon icon-Search"></span></button>
								</div>
							</li>
						</ul>
					</div>
				</div> <!-- end container -->
			</div><!-- end top_header -->
			
			<div class="bottom_header top-bar-gradient" style="background: -o-linear-gradient(bottom-right, #0C0C0C, white); background: -moz-linear-gradient(bottom-right, #0C0C0C, white); background: linear-gradient(to bottom right, #0C0C0C, white);">
				<div class="container clear_fix">
					<div class="float_left logo">
						<a href="{{url('home')}}">
							<img src="{{URL::asset('assets/images/logo1.png')}}" alt="Me Finance">
						</a>
					</div>
					<div class="float_right address">
						<div class="top-info">
							<div class="icon-box">
								<span class=" icon icon-Pointer"></span>
							</div>
							<div class="content-box">
								<p> Nepal Pokhara-5<br>Zero KM(Nirmal Shanti Niwas)</p>
							</div>
						</div>
						<div class="top-info">
							<div class="icon-box">
								<span class="separator icon icon-Phone2"></span>
							</div>
							<div class="content-box">
								<p>Phone: 061-530819, 520010 <br>Mob: 9856039322</p>
							</div>
						</div>
						<div class="top-info">
							<div class="icon-box">
								<span class="separator icon icon-Timer"></span>
							</div>
							<div class="content-box">
								<p>Mon - Sat 9:00 - 5:00 <br>Sunday Closed</p>
							</div>
						</div>
					</div>
				</div> <!-- end container -->
			</div> <!-- end bottom_header -->
		</header> <!-- end header -->
<!-- ======= /Header ======= -->
<!-- ======= mainmenu-area section ======= -->
		<section class="mainmenu-area stricky">
			<div class="container">
				<nav class="clearfix">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header clearfix" styl>
				      <button type="button" class="navbar-toggle collapsed">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="fa fa-th fa-2x"></span>
				      </button>
				    </div>
					<div class="nav_main_list custom-scroll-bar pull-left" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav" id="hover_slip">
							<li><a href="{{url('home')}}">Home</a></li>
							<li class="arrow_down"><a href="{{url('about')}}">About Us</a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{url('message')}}">Message</a></li>
										<li><a href="{{url('advisor')}}">Our Advisor</a></li>
										<li><a href="{{url('testimonial')}}">Our Team</a></li>
										<li><a href="{{url('department')}}">Our Departments</a></li>
									</ul>
								</div>
							</li>
							<li class="arrow_down"><a href="{{url('service')}}">Services</a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{url('service2')}}">Service Two</a></li>
									</ul>
								</div>
							</li>
							<li class="arrow_down" ><a href="{{url('studyabroad')}}">Study Abroad</a>
							</li>
							<li class="arrow_down" ><a>News/Events</a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{url('news')}}">News</a></li>
										<li><a href="{{url('events')}}">Events</a></li>
									</ul>
								</div>
							</li>
							<li class="arrow_down" ><a href="{{url('gallery')}}">Gallery</a>
							</li>
							<li><a class="contact" href="{{url('contactus')}}">Contact Us</a></li>
						</ul>
					</div>
					<div class="find-advisor pull-right">
						<a href="{{url('advisor')}}" class="advisor ">Find Advisor</a>
					</div>
				</nav> <!-- End Nav -->
			</div> <!-- End Container -->
		</section>
<!-- ======= /mainmenu-area section ======= -->
