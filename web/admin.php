
<?php
require 'essentials.php';
if(isset($_SESSION['Admin_Status']) && $_SESSION['Admin_Status']!='Yes' ){
	header('Location: index.php');

}
else{
	$query="SELECT `EmpID`,`Email` FROM `registeration` LIMIT 0, 30 ";

}




?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>VTS - Admin</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Emphasize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="checkbox.js"></script> -->



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
                      echo '<li style="padding-left:700px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>';
                      header('Location:login.php');
                  }
                   ?>
									<!-- <li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li> -->
								</ul>
							</div>

					</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

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

		<div class="container">
    <div class-"row">
    <div class="col-md-6"style="color:#2e2b2c; float : none; margin:0 auto; width:40">
		<h3 class="heading-agileinfo" align="center" style="margin-bottom:1em; margin-top:2em;">Admin Panel</h3>
      <?php

        echo"<form action='admin.php' method= 'POST'>
        <table class='table'border= 1 width=400>
        <tr>
        <th class='text-center'>Select</th>
        <th class='text-center'>EmpID</th>
				<th class='text-center'>First Name</th>
				<th class='text-center'>Last Name</th>
        <th class='text-center'>Email</th>
				<th class='text-center'>Approved Status</th>
        </tr>";
        $query="SELECT `EmpID`,`Email`,`First`,`Last`,`Approved_status` FROM `registeration` WHERE `Approved_status`='Yes' LIMIT 0, 30 ";
        if($query_run_1=mysqli_query($con,$query))
        {
        while ($query_row_1=mysqli_fetch_array($query_run_1,MYSQLI_ASSOC))
          {
            $Emp=$query_row_1['EmpID'];
            $Email=$query_row_1['Email'];
						$First= $query_row_1['First'];
						$Last= $query_row_1['Last'];
						$App= $query_row_1['Approved_status'];
            echo '<tr>';
            // echo'<td><input type="checkbox" name="checkboxlist" class= case value="'.$Emp.'" /></td>';
						echo'<td align="center"><input type="checkbox" name="EmpID[]" class= case value='.$Emp.' /></td>';
            echo'<td align="center">'.$Emp.'</td>';
						echo'<td align="center">'.$First.'</td>';
						echo'<td align="center">'.$Last.'</td>';
            echo'<td align="center">'.$Email.'</td>';
						echo'<td align="center">'.$App.'</td>';
            echo '</tr>';
          }
        }

        echo '</table>';
        echo '<br>';
        echo '<input style="margin-left:250px" type="submit" value="Delete User(s)" id="buttonClass ">';
        echo'</form>';



			if(isset($_POST['EmpID']) ){

	        foreach($_POST['EmpID'] as $val){
					// // 	echo $val;
	        	$id_c = $val;
						
	          $query2 = "DELETE  FROM `registeration` where EmpID='".$id_c."'";
	          $result2 = mysqli_query($con,$query2);
	          if($result2 === false) {
	        		die(mysql_error());
	        	}

					header("refresh:1; url=admin.php");
	        }
	    }
       ?>



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
				<p>© 2018 Vikas Techno School .<!--  All Rights Reserved.  | Design by <a href="http://w3layouts.com/">W3layouts</a>  --></p>
		</div>
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
