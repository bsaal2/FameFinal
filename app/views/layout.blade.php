<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Fame-International</title>
		
		@section('head')
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('assets/images/fav-icon/apple-icon-57x57.png')}}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('assets/images/fav-icon/apple-icon-60x60.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('assets/images/fav-icon/apple-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('assets/images/fav-icon/apple-icon-76x76.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('assets/images/fav-icon/apple-icon-114x114.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('assets/images/fav-icon/apple-icon-120x120.png')}}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('assets/images/fav-icon/apple-icon-144x144.png')}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('assets/images/fav-icon/apple-icon-152x152.png')}}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('assets/images/fav-icon/apple-icon-180x180.png')}}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{URL::asset('assets/images/fav-icon/android-icon-192x192.png')}}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('assets/images/fav-icon/favicon-32x32.png')}}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('assets/images/fav-icon/favicon-96x96.png')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/images/fav-icon/favicon-16x16.png')}}">


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap/bootstrap.css')}}" media="screen">


		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,300,300italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{URL::asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
		<!-- Stroke Gap Icon -->
		<link rel="stylesheet" href="{{URL::asset('assets/fonts/stroke-gap/style.css')}}">
		<!-- owl-carousel css -->
		<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.css')}}">

		<!-- owl-carousel css -->
		<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.css')}}">
		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/custom/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/responsive/responsive.css')}}">
		@show


		<!--[if lt IE 9]>
	   		<script src="js/html5shiv.js"></script>
		<![endif]-->



	</head>
	<body class="home">
	
	@include('header')
	
	@yield('content')

	@include('Footer')

		<!-- Js File -->

		<!-- j Query -->
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.wysiwyg.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.4.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/revolution-slider/jquery.themepunch.tools.min.js')}}"></script> <!-- Revolution Slider Tools -->
		<script src="{{URL::asset('assets/js/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script> <!-- Revolution Slider -->
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.actions.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.migration.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/revolution-slider/extensions/revolution.extension.video.min.js')}}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.appear.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.countTo.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fancybox.pack.js')}}"></script>
		<!-- owl-carousel -->
		<script type="text/javascript" src="{{URL::asset('assets/js/owl.carousel.js')}}"></script>
		<script src="{{URL::asset('assets/js/owl-custom.js')}}"></script>
		<!-- Custom & Vendor js -->
		<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>


	</body>
</html>
