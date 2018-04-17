<?php

require 'connect.inc.php';
require 'session.php';
require 'check_login.php';

if(loggedin()){
header('Location:trial.php');
}

if (isset($_POST['username'])&&isset($_POST['password']))
{
  if(!empty($_POST['username'])&&!empty($_POST['password']))
  {
  $name=$_POST['username'];
  $password=$_POST['password'];
  $password_hash=md5($password);
  $query= "SELECT `EmpID` FROM `registeration` WHERE `Email`='$name' AND `Password`='$password_hash' LIMIT 0, 30 ";
	echo $query;

  }
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
									<li style="padding-left:800px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
								</ul>
							</div>

					</div>
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="about.html">About</a></li>
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

		<div class="container" style="padding-top:80px">
    <div class-"row">
      <div class="col-md-6" style="color:#f3e1e1; float : none; margin:0 auto; width:40%">
        <h2 class="form-signin-heading" style="margin:auto">Please login</h2>
				<div class="invalid">
					<?php
  						if (isset($_POST['username'])&&isset($_POST['password'])&&isset($query))
  						{
  							if($query_run=mysqli_query($con,$query))
  							{
   								$query_num_rows=mysqli_num_rows($query_run);
   								if($query_num_rows==0)
   								{
    								echo "Username/Password Invalid . Try Again.";
   								}
   								else
   								{
    								#$user_id=mysqli_result($query_run,0,'EmpID');
										$row= mysqli_fetch_array($query_run,MYSQLI_ASSOC);
    								$_SESSION['EmpID']=$row['EmpID'];
    								header('Location:trial.php');
   								}
  							}
							}
					?>
					</div>
          <form class="form-signin" style="padding-top:20px" action="login.php" method="POST">

            <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
            <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
            <div style="font-size:16px; padding-left:100px; margin-top:15px">
            <a href="registeration.html">Register</a> - <a href="#">Forgot Password</a>
          </div>
          </form>
  </div>
	</div>
</div>

</div>

</body>
</html>
