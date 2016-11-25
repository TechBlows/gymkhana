<!DOCTYPE html>
	<html>
	
		<head>
		<base href="<?php echo base_url(); ?>">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>GYMKHANA &mdash; Store for all accesories of GYM in Kathmandu, Nepal</title>
			<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/fav.png')?>" />
			<meta name="viewport" content="width=device-width, initial-scale=1">

		  	<!-- Facebook and Twitter integration -->
			<meta property="og:title" content=""/>
			<meta property="og:image" content=""/>
			<meta property="og:url" content=""/>
			<meta property="og:site_name" content=""/>
			<meta property="og:description" content=""/>
			<meta name="twitter:title" content="" />
			<meta name="twitter:image" content="" />
			<meta name="twitter:url" content="" />
			<meta name="twitter:card" content="" />

			<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
			
			<!-- Animate.css -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
			<!-- Icomoon Icon Fonts-->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
			<!-- Bootstrap  -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

			<!-- Magnific Popup -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">

			<!-- Owl Carousel  -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
			<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

			<!-- Theme style  -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

			<!-- Modernizr JS -->
			<script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/jquery/jquery-ui.min.js"></script>
		
			<style type="text/css">
				input{
					border-radius: 15px;
					margin-left: -10px;
					border:0px solid grey;
					background-image: url('<?php echo base_url(); ?>assets/images/searchicon.png');
					background-repeat: no-repeat;
					background-position: right;
				}

			</style>
			<script type="text/javascript">
				$(function(){
  					$("#serach").autocomplete({
    				source: "users/get_searches" // path to the get_searches method
  				});
			});
			</script>
		</head>
		
		<body>
			<div class="fh5co-loader"></div>
	
			<div id="page">
			<nav class="fh5co-nav" role="navigation">
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-xs-4 text-left">
							
				                   <form action ="users/search" method="post" >
				                   	<input type="text" name="query" placeholder=" Search" id="search"/>
				                   </form>
				 
							</div>
							<div class="col-xs-4 text-center">
								<p class="num">Call: +977-980-3151-129</p>
								<ul class="fh5co-social">
									<li><a href="https://facebook.com/"><i class="icon-facebook"></i></a></li>
									<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
									<li><a href="https://instagram.com/"><i class="icon-instagram"></i></a></li>								
								</ul>
							</div>
							<div class="col-xs-4 text-right">
							<!-- Check if session exists -->
								<?php if($this->session->userdata('logged_in')){
 									echo '<a href="login/logout" style="color:white;"><i class="icon-log-out" style="color:white;"></i> Logout </a>';
								}
								else{
									echo '<a href="admin/login_page" style="color:white;"><i class="icon-user" style="color:white;"></i> <u>Admin Login</u> </a>';	
									}?>
														
				                    
							</div>
						</div>
					</div>
				</div>
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-1">
								<div id="fh5co-logo"><a href="index.php">GYMKHANA<span>.</span></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
								<!-- Check if session exists -->
								<?php if($this->session->userdata('logged_in')){
 									echo '
 									<li><a href="admin/index">Admin</li>
 									<li class="active"><a href="#home">Home</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#about">Trainer</a></li>
									<li><a href="#schedule">Schedule</a></li>
									<li><a href="#price">Pricing</a></li>
									<li class="has-dropdown">
										<a href="#blog">Blog</a>
										<ul class="dropdown">
											<li><a href="#">Blog 1</a></li>
											<li><a href="#">Blog 2</a></li>
											<li><a href="#">Blog 3</a></li>
										</ul>
									</li>
									<li><a href="#contact">Contact</a></li>
									';
								}
								else{
									echo '<li class="active"><a href="#home">Home</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#about">Trainer</a></li>
									<li><a href="#schedule">Schedule</a></li>
									<li><a href="#price">Pricing</a></li>
									<li class="has-dropdown">
										<a href="#blog">Blog</a>
										<ul class="dropdown">
											<li><a href="#">Blog 1</a></li>
											<li><a href="#">Blog 2</a></li>
											<li><a href="#">Blog 3</a></li>
										</ul>
									</li>
									<li><a href="#contact">Contact</a></li> ';	
									}?>
														
				                    
<!-- 									<li class="active"><a href="#home">Home</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#about">Trainer</a></li>
									<li><a href="#schedule">Schedule</a></li>
									<li><a href="#price">Pricing</a></li>
									<li class="has-dropdown">
										<a href="#blog">Blog</a>
										<ul class="dropdown">
											<li><a href="#">Blog 1</a></li>
											<li><a href="#">Blog 2</a></li>
											<li><a href="#">Blog 3</a></li>
										</ul>
									</li>
									<li><a href="#contact">Contact</a></li> -->
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</nav>

		</body>
		<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="assets/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="assets/js/main.js"></script>

</html>