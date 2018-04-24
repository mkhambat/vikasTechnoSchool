<?php
require 'essentials.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>VTS - Home</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Emphasize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- // custom-theme -->
<!--css links-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
<link href="css/style_1.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts-->
<!-- <link href="//fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet"> -->
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner w3l">
		<div class="header-nav">
			<nav class="navbar navbar-default">
			<div class="header-top">
					<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Vikas Techno School</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="contact-bnr-w3-agile">
						<ul>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a></li>
							<?php

							if(loggedin()){
								echo '<li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>';
								echo'<li><i class="fa fa-user" aria-hidden="true"></i>'.$result.'</a></li>';

							}
							else{
									echo '<li style="padding-left:700px; margin-top: -50px;" ><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>';
								}
							?>
						</ul>
							</div>
							</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav ">
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="admissions.php">Admissions</a></li>
							<li><a href="events.php">Events</a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
								<ul class="dropdown-menu">

									<li><a href="gallery.php">View Gallery</a></li>
									<?php
									if(loggedin()) {


									echo'<li><a href="upload.php">Upload photos</a></li>';
								}
									?>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="view-courses.php">View Courses</a></li>
									<?php
									if(loggedin()) {
									echo '<li><a href="upload-course.php">Upload Syllabus</a></li>';
								}
								?>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<?php if(isset($_SESSION['Admin_Status']) && $_SESSION['Admin_Status']=='Yes' ){
								echo '<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Panel<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="admin.php">VIEW USERS</a></li>
										<li><a href="admin_approval.php">APPROVE USERS</a></li>';

							}
							 ?>
						</ul>

					</div>
					<div class="clearfix"> </div>
				</nav>
							<div class="clearfix"> </div>
		</div>
		<div class="container">
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>The best place for </h3>
							<h4>education</h4>
							<p>“Ideas shape the course of history as the pen is mightier than the sword.”</p>
							<div class="more-button">
			<a href="about.php">Read More</a>
		</div>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>Better education for a</h3>
							<h4>Better world</h4>
							<p>Redefining School</p>
							<div class="more-button">
			<a href="about.php" >Read More</a>
		</div>
						</div>
					</li>
					<!-- <li>
						<div class="banner-text">
							<h3>Tips to succeed in</h3>
							<h4>education</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem ab illo.</p>
							<div class="more-button">
			<a href="about.php">Read More</a>
		</div>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>Better education for a</h3>
							<h4>Better world</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem ab illo.</p>
							<div class="more-button">
			<a href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
		</div> -->
						</div>
					</li>
				</ul>
			</div>
		</div>

		</div>
</div>
<!-- //Header -->
<!-- Modal1 -->
				<!-- 		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Vikas Techno School</h4>
										<img src="images/bann.jpg" alt=" " class="img-responsive">
										<h5>Better education for a Better world</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal1 -->
<!-- Events-Modal-Popup-->
<!-- Modal2 -->
				<!-- 		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Vikas Techno School</h4>
										<img src="images/a1.jpg" alt=" " class="img-responsive">
										<h5>Emphasize Summer 2017</h5>
										<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.</p>
							</div>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal2 -->
<!-- Modal3 -->
				<!-- 		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
					<!-- 			<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Emphasize</h4>
										<img src="images/a2.jpg" alt=" " class="img-responsive">
										<h5>Summer online courses</h5>
										<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>BERLIN, GERMANY</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.</p>
							</div>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal3 -->
<!-- Modal4 -->
				<!-- 		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Emphasize</h4>
										<img src="images/a3.jpg" alt=" " class="img-responsive">
										<h5>Education tour 2017</h5>
										<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>25June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>VENICE, ITALY</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.</p>
							</div>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal4 -->
<!-- Modal5 -->
				<!-- 		<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Emphasize</h4>
										<img src="images/a4.jpg" alt=" " class="img-responsive">
										<h5>Good Results</h5>
										<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>01 July</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>NEWYORK, USA</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore.</p>
							</div>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal5 -->
<!-- //Events-Modal-Popup-->
<!-- about-agileits -->
<div class="about-agileits">
		<div class="container">
		<h3 class="heading-agileinfo">About Us<span>Redefining School</span></h3>
			<div class="agileits_banner_bottom">
				<p>We are a Private school located in Andra Pradesh, the southern state of India. Currently, home to over 2000 students, we provides quality education and all-round development of students between the age of 5-18 years. Since our establishment in 2011, we have been the only major private sector school in the area. Employing 120 staffs and teachers, we has been a spearhead in providing quality education to students in Vissannapeta, Andra Pradesh. </p>
			</div>
			<!-- <div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">Who we are</h4>
							<span class="cbp-ig-category">Emphasize</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">What we do</h4>
							<span class="cbp-ig-category">Emphasize</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">activities</h4>
							<span class="cbp-ig-category">Emphasize</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">Experience</h4>
							<span class="cbp-ig-category">Emphasize</span>
						</div>
					</li>
				</ul>
			</div> -->
		</div>
	</div>
<!-- about-agileits -->
<!-- Stats -->
	<div class="stats-agileits" id="stats">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">We Have Something To Be Proud Of<!-- <span class="black-w3ls">Sed lectus tellus , feugiat porttitor nulla.</span> --></h3>
	</div>
		<div class="stats-info agileits w3layouts">
		<div class="container">
			<div class="col-md-3 agileits w3layouts col-sm-6 stats-grid stats-grid-1">
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2000' data-delay='3' data-increment="2">2000</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Students enrolled</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 agileits w3layouts stats-grid stats-grid-2">
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='120' data-delay='11' data-increment="2">120</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Motivated Teachers</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid agileits w3layouts stats-grid-3">
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='50' data-delay='11' data-increment="2">50</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Percentage of students graduating with 9+ GPA</h4>
				</div>
			</div>
			<!-- <div class="col-md-3 col-sm-3 stats-grid stats-grid-4 agileits w3layouts">
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='210' data-delay='3' data-increment="2">210</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Complete Courses</h4>
				</div>
			</div> -->
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Stats -->
<!--Events -->
		<!-- <div class="events-agileits-w3layouts">
		<h3 class="heading-agileinfo">Upcoming Events<span>Upcoming Education Events to feed your brain.</span></h3>

				<div class="popular-grids">
					<div class="col-md-3 popular-grid">
						<img src="images/a1.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal2">Emphasize Summer 2017</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>LONDON, UK</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/a2.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal3">Summer online courses</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>BERLIN, GERMANY</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/a3.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal4">Education tour 2017</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>25June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>VENICE, ITALY</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/a4.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal5">Good Results</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>01 July</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>NEWYORK, USA</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod tempor incididunt ut labore</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div> -->
<!-- //Events -->
<!--testimonials-->
<!-- <div id="testimonials" class="testimonials">
	<div class="container">
		<h3 class="heading-agileinfo">Our Parents Says <span>Sed lectus tellus , feugiat porttitor nulla.</span></h3>
		<div class="flex-slider">
			<ul id="flexiselDemo1">
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
								adipisci velit, sed quia non numquam.</p>
							<div class="name-w3ls">
								<h5>Federica</h5>
								<span>lorem ipsum</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/test1.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
								adipisci velit, sed quia non numquam.</p>
							<div class="name-w3ls">
								<h5>Thompson</h5>
								<span>lorem ipsum</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/test2.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
			</ul>

		</div>

	</div>
</div>
 --><!--//testimonials-->
<!-- footer -->

<div class="contact-w3ls ">
<div class="contact-top-w3-agile">
</div>
	<div class="container">
		<h2 class="heading-agileinfo white-w3ls">Contact Us<span class="black-w3ls">Welcome to our school. We are glad to have you around.</span></h2>
		<ul class="w3_address">
			<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Vissannapetaa, Andhra Pradesh 521215, India</span></li>
			<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>+91 86732 72023<br><!-- +1567 567 234</span> --></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a><br><!-- <a href="mailto:info@example.com">info@example2.com</a></span></li> -->
			<li><i class="fa fa-comments-o" aria-hidden="true"></i><span><a href="contact.php">Contact >></a></span></li>
		</ul>
			<div class="clearfix"></div>
		<div class="copy">
				<ul class="banner-menu-w3layouts">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="admissions.php">Admissions</a></li>
					<li><a href="events.php">Events</a></li>

					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="view-courses.php">Courses</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<!-- <ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul> -->
				<p>© 2018 Vikas Techno School .<!--  All Rights Reserved.  | Design by <a href="http://w3layouts.com/">W3layouts</a>  --></p>
		</div>
	</div>
</div>
<!--//footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
<!-- <!- //responsiveslides -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript
Scrolling-top -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--//Scrolling-top -->
 <!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems: 1
										},
										tablet: {
											changePoint:991,
											visibleItems: 1
										}
									}
								});

							});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling --> -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
