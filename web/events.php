<?php
require 'essentials.php';
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>VTS - Events</title>
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
									<!-- <li><i class="fa fa-phone" aria-hidden="true"></i>+91 86732 72023</li> -->
								<?php

							if(loggedin()){
								echo '<li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>';
								echo'<li><i class="fa fa-user" aria-hidden="true"></i>'.$result.'</a></li>';

							}
							else{
									echo '<li style="padding-left:700px; margin-top:-50px;"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>';
								}
							?>
						</ul>
							</div>
							</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav ">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php" >About</a></li>
							<li><a href="admissions.php">Admissions</a></li>
							<li><a href="events.php" class="active" >Events</a></li>

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
</div>
<!-- //Header -->
<!-- services inner -->
<div class="agileinfo_services_grids inner-padding">
<div class="container">
<h3 class="heading-agileinfo">School Events<!-- <span>We are giving special services</span> --></h3>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<!-- <i class="fa fa-female" aria-hidden="true"></i> -->
						<h4>Annual Sports Meet</h4>
						<p>Every year students compete with other students in sports like Track and Field, March-Past, Cricket, Volleyball, Badminton, etc. These sports are held between various houses in a pirticular school. </p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<!-- <i class="fa fa-group" aria-hidden="true"></i> -->
						<h4>Annual Day</h4>
						<p>On this day every year, students get a chance to showcase their skills where, they stage various types of skits, dance and singing performances. </p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<!-- <i class="fa fa-book" aria-hidden="true"></i> -->
						<h4>Teacher Training Program</h4>
						<p>Training programs and Spoken English classes for teachers and students are conducted on a regular basis.</p>
					</div>
				</div>





				<!-- <div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<i class="fa fa-group" aria-hidden="true"></i>
						<h4>Social Programs</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi,
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<i class="fa fa-trophy" aria-hidden="true"></i>
						<h4>Special Olympics</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi,
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div> -->
				<div class="clearfix"> </div>
	</div>
</div>

<div class="agileinfo_services_grids inner-padding">
<div class="container">
<h3 class="heading-agileinfo">Cultural Festivals<!-- <span>We are giving special services</span> --></h3>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Diwali</h4>
			<p>The celebraton of Diwali, comes alive at Vikas techno School where the entire school wears a festive look with pots, diyas and lanterns adorning the reception and corridors of the school. Students talk about how good always conquers the evil and also about why and how Diwali is celebrated across the country.</p>
		</div>
	</div>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Ganesh Chaturthi</h4>
			<p>Students celebrate Ganesh Chaturthi with great pomp and gaiety. The session usually starts with a traditional lamp lighting and aarthi. Children showcase dances, songs and skits depicting the importance of Lord Vinayaka.</p>
		</div>
	</div>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Pongal</h4>
			<p>Pongal celebration starts with guru pooja followed by colourful presentations of cultural programms by students. It includes, traditional dance, poems, songs and games.</p>
		</div>
	</div>

</div>
</div>

<div class="agileinfo_services_grids inner-padding">
<div class="container">
<h3 class="heading-agileinfo">National Festivals<!-- <span>We are giving special services</span> --></h3>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Independence Day</h4>
			<p>Indepencence day is celebrated at Vikas Techno School with gratitude and sacrifice of freedom fighters. The celebration begins in school premises with the unfurling of the National Flag followed by a speech with patriotic zeal and fervour by the Principal.</p>
		</div>
	</div>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Republic Day</h4>
			<p>Republic Day is celebrated by staff and students with patriotic fervour. After hoisting the National flag the pricipal speaks about the sanctity of the occasion and role played by the Constitutional makers.</p>
		</div>
	</div>

	<div class="col-md-4 agileinfo_services_grid">
		<div class="agileinfo_services_grid1">
			<!-- <i class="fa fa-paint-brush" aria-hidden="true"></i> -->
			<h4>Children's Day</h4>
			<p>Teachers and children remember Pandit Jawarharlal Nehru, our first Prime Minister, and celebrate the love he had for all children with a host of fun-filled activities and delicious food. </p>
		</div>
	</div>



</div>
</div>


	<!-- //services inner -->
<!-- footer -->

<div class="contact-w3ls ">
<div class="contact-top-w3-agile">
</div>
	<div class="container">
		<h2 class="heading-agileinfo white-w3ls">Contact Us<span class="black-w3ls">Welcome to our school. We are glad to have you around.</span></h2>
		<ul class="w3_address">
			<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Vissannapetaa, Andhra Pradesh 521215, India</span></li>
			<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>+91 86732 72023<br></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a><br></li>
			<li><i class="fa fa-comments-o" aria-hidden="true"></i><span><a href="contact.html">Contact >></a></span></li>
		</ul>
			<div class="clearfix"></div>
		<div class="copy">
				<ul class="banner-menu-w3layouts">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="admissions.php">Admissions</a></li>
					<li><a href="events.php">Events</a></li>

					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="view-courses.php">Courses</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<!-- <ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul> -->
				<p>© 2018 Vikas Techno School .<!--  All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> --> </p>
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
