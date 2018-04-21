<?php
require 'essentials.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>VTS - About</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Emphasize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- // custom-theme -->
<!--css links-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts--><!--
<link href="//fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet"> -->
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner inner-banner-w3l">
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
								echo '<li style="padding-left:400px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>';
								echo'<li><i class="fa fa-user" aria-hidden="true"></i>'.$result.'</a></li>';

							}
							else{
									echo '<li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>';
								}
							?>
						</ul>
							</div>
							</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php" class="active">About</a></li>
							<li><a href="services.html">Admissions</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="codes.html">Short Codes</a></li>
									<li><a href="icons.html">Icons</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>
				</nav>
							<div class="clearfix"> </div>
		</div>
</div>
<!-- //Header -->
<!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
	<h3 class="heading-agileinfo">About Us<span>Redefining School</span></h3>
				<div class="about-bott-right">
					 <h5>Who We Are</h5>
					 <p>We are a Private school located in Andra Pradesh, the southern state of India. Currently, home to over 2000 students, we provides quality education and all-round development of students between the age of 5-18 years. Since our establishment in 2011, we have been the only major private sector school in the area. Employing 120 staffs and teachers, we has been a spearhead in providing quality education to students in Vissannapeta, Andra Pradesh. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
<div class="about-agile inner-padding">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">Play, explore and learn.<span class="yellow-w3ls">Experience a good Education</span></h3>
		<p>“Ideas shape the course of history as the pen is mightier than the sword.”</p>
			<div class="more-button">
				<a href="contact.html">Mail Us</a>
			</div>
	</div>
</div>
<!-- //about inner -->
<!-- Team -->
<div class="team" id="team">
		<div class="container">
		<h3 class="heading-agileinfo">Meet Our Staff<!-- <span>Quis autem vel eum iure reprehenderit</span> --></h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/t1.jpg" alt=" " class="img-responsive">
						<div class="mask">
							<h5>Lorem Ipsum</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Daniel</h4>
					<p>Director</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/t2.jpg" alt=" " class="img-responsive">
						<div class="mask">
							<h5>Lorem Ipsum</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Smith Carl</h4>
					<p>Pricipal</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/t3.jpg" alt=" " class="img-responsive">
						<div class="mask">
							<h5>Lorem Ipsum</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>James Mac</h4>
					<p>Teacher</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="view view-sixth">
						<img src="images/t4.jpg" alt=" " class="img-responsive">
						<div class="mask">
							<h5>Lorem Ipsum</h5>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
							<div class="agileits_social_icons">
								<ul class="agileits_social_list">
									<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h4>Mary Winkler</h4>
					<p>Teacher</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Team -->
<!-- footer -->

<div class="contact-w3ls ">
<div class="contact-top-w3-agile">
</div>
	<div class="container">
		<h2 class="heading-agileinfo white-w3ls">Contact Us<span class="black-w3ls">Welcome to our school. We are glad to have you around.</span></h2>
		<ul class="w3_address">
			<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Vissannapetaa, Andhra Pradesh 521215, India</span></li>
			<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>+91 86732 72023<br><!-- +1567 567 234</span> --></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a><br><!-- <a href="mailto:vtsiit2011@gmail.com">info@example2.com</a></span></li> -->
			<li><i class="fa fa-comments-o" aria-hidden="true"></i><span><a href="contact.html">Contact >></a></span></li>
		</ul>
		<div class="clearfix"> </div>
		<div class="copy">
				<ul class="banner-menu-w3layouts">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Admissions</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<!-- <ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul> -->
				<p>© 2018 Vikas Techno School . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
</div>
<!--//footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js -->
<script src="js/SmoothScroll.min.js"></script>
<!--Scrolling-top -->
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
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
