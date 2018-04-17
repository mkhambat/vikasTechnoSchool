
<?php
require 'connect.inc.php';
require 'session.php';
require 'check_login.php';
require 'get_field.php';


if(isset($_SESSION['EmpID'])&&!empty($_SESSION['EmpID']))
{
$result=getuserfield('Email');
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>VTS</title>
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
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                  <?php
                  if(loggedin()){
                    echo '<li style="padding-left:400px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>';
                    echo'<li><i class="fa fa-user" aria-hidden="true"></i>'.$result.'</a></li>';

                  }
                  else{
                      echo '<li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>';
                      header('Location:login.php');
                  }
                   ?>
									<!-- <li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li> -->
								</ul>
							</div>

					</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="active">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.html">Services</a></li>
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

		<div class="container" style="padding-top:50px">
    <div class-"row">
    <div class="col-md-6" style="color:#f3e1e1; float : none; margin:0 auto; width:40%">
      <?php
      if(isset($_SESSION['EmpID'])&&!empty($_SESSION['EmpID']))
      {
      $result=getuserfield('First');
      echo '<h2>Welcome , '.$result."</h2>";
      }
       ?>
    <p><a href="logout.php">Logout</a></p>


	</div>
  </div>
	</div>

</div>

</body>
</html>
