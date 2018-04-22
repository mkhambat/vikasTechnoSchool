<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Emphasize an Education Category Bootstrap Responsive Web Template | Gallery :: w3layouts</title>
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
<link href="css/lightcase.css" rel="stylesheet" type="text/css" />
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
							<a class="navbar-brand" href="index.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Emphasize</a>
						</h1>
					</div>
					<!-- navbar-header -->
					<div class="contact-bnr-w3-agile">
						<ul>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+1 (100)222-0-33</li>	
						</ul>
					</div>
				</div>
				<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<!-- <li><a href="gallery.html" class="active">Gallery</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="gallery.php">View Gallery</a></li>
								<li><a href="upload.php">Upload photos</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="upload-course.php">Upload Syllabus</a></li>
								<li><a href="view-courses.php">View Courses</a></li>
							</ul>
						</li>
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
	<!-- gallery inner -->
	<div class="inner-padding">

		

		<div class="container">
			<h3 class="heading-agileinfo">Upload Course Syllabus</h3>
		<!-- 	<div class="w3ls_portfolio_grids"> -->
				<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
					Select image to upload:
					<input type="file" name="fileToUpload" id="fileToUpload">
					<input type="submit" value="Upload Image" name="submit">
				</form> -->
				<form action="upload-course.php" method="post" enctype="multipart/form-data">
					<table align="center">
					<tr>
						<td><input type="text" name="coursename" placeholder="Course Name"></td>
					</tr>
						<tr>
							<td><!-- <input type="file" name="files[]" multiple/> --><input type="file" name="fileToUpload" id="fileToUpload"></td>
							
						</tr>
						<tr>
							<td  ><input type="submit" value="Upload Course" name="submit" id="submit"/></td>
						</tr>
					</table>
				</form>

				<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$target_dir = "courses/";
	$coursename = $_POST['coursename'];
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$file_type = $_FILES['fileToUpload']['type'];
	echo "this.".$file_type;

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {
 	require 'connect.inc.php';
	$sql= "INSERT INTO courses(course_name,file_path) VALUES('$coursename','$target_file')";
  mysqli_query($con,$sql);
  echo 'inserted';
 echo "The file ". basename( $_FILES['fileToUpload']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}



/*	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
		}
*/
// Check if file already exists
/*	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
*/// Check file size
	/*if ($_FILES["fileToUpload"]["size"] > 5000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}*/
// Allow certain file formats
	/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}*/
}
?>



			<!-- </div> -->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //gallery inner -->
<!-- footer -->

<div class="contact-w3ls ">
	<div class="contact-top-w3-agile">
	</div>
	<div class="container">
		<h2 class="heading-agileinfo white-w3ls">Contact Us<span class="black-w3ls">Welcome to our Emphasize. We are glad to have you around.</span></h2>
		<ul class="w3_address">
			<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Melbourne St, QLD 4101, Australia.</span></li>
			<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>+1234 567 567<br>+1567 567 234</span></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="mailto:info@example.com">info@example1.com</a><br><a href="mailto:info@example.com">info@example2.com</a></span></li>
			<li><i class="fa fa-comments-o" aria-hidden="true"></i><span><a href="contact.html">Contact >></a></span></li>
		</ul>
		<div class="clearfix"></div>
		<div class="copy">
			<ul class="banner-menu-w3layouts">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<ul class="agileits_social_list">
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
			</ul>
			<p>© 2017 Emphasize . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
</div>
<!--//footer -->
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

