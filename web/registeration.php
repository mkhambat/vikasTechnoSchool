<!-- !--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
require 'connect.inc.php';
require 'session.php';
require 'check_login.php';
if(loggedin()){
	if(isset($_SESSION['Admin_Status']) && $_SESSION['Admin_Status']=='Yes' ){
		header('Location:admin.php');
	}
	else{
		header('Location:index.php');
	}
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>VTS - Register</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Emphasize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="psw.js"></script>



<!-- // custom-theme -->
<!--css links-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts-->
<!-- <link href="//fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet"> -->
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner w3l">
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
									<a class="navbar-brand" href="index.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Vikas Techno School</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="contact-bnr-w3-agile">
								<ul>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a></li>
									<li style="padding-left:700px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
								</ul>
							</div>

					</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<!-- <ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="codes.html">Short Codes</a></li>
									<li><a href="icons.html">Icons</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul> -->
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>
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
	</div>

		<div class="container" style="padding-top:10px">
    <div class-"row">
    <div class="col-md-6" style="color:#2e2b2c; margin:0 auto;float : none; width:40%">

    <h3 class="heading-agileinfo" align="center" style="margin-bottom:1em; margin-top:1.5em;">Sign Up!</h3>



		 <form class="form-signin" style=" padding-top: 20px;margin-top:20px;"id="accountActivation" action="insert.php" method="post">
			 <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<!-- <label for="email"><b>Email</b></label> -->
		<input  id="first" type="text" class="form-control" placeholder="Enter First Name"  style="height: 50px;margin:0 0 0" name="first" required pattern="[a-zA-Z0-9]+">
 </div>
 <div class="input-group">
	 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<!-- <label for="email"><b>Email</b></label> -->
<input  id="last" type="text" class="form-control" placeholder="Enter Last Name"  style="height: 50px;margin:0 0 0" name="last" required pattern="[a-zA-Z0-9]+">
</div>
			 <div class="input-group">
				 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <!-- <label for="email"><b>Email</b></label> -->
    <input  id="email" type="text" class="form-control" placeholder="Enter Email"  style="height: 50px;margin:0 0 0" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
	</div>
	<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
		<input id="empid" type="text" class="form-control" placeholder="Enter Employee ID" style="height: 50px;margin:0 0 0" name="empid" required pattern=".{5}"  title="5 digits required">
	</div>
	<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input id="psw" type="password" class="form-control"  placeholder="Enter Password" style="height: 50px;margin:0 0 0" name="psw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
	 </div>

	 <div class="input-group">
		 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="psw-repeat" type="password" class="form-control" placeholder="Repeat Password" style="height: 50px;margin:0 0 0" name="psw-repeat" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
	</div>
	<div class="registrationFormAlert" id="divCheckPasswordMatch">Passwords missmatch</div>
    <div class="clearfix">
			<div id="submit">
      <button id="buttonActivate"type="submit" class="signupbtn" disabled="disabled">Sign Up</button>
    </div>
		</form>
	</div>
  </div>
	</div>

</div>

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
			<p>© 2018 Vikas Techno School .<!--  All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> --> </p>
	</div>
</div>

!--//footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js -->
<!-- light-case -->
<script src="js/lightcase.js"></script>
<script src="js/jquery.events.touch.js"></script>
<script>
	$('.showcase').lightcase();
</script>
<!-- //light-case -->
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
