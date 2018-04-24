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
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:vtsiit2011@gmail.com">vtsiit2011@gmail.com</a></li>
              <?php
              ?>
              <li style="padding-left:580px"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
            </ul>
          </div>

        </div>
        <div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
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


<?php

//start session
require 'connect.inc.php';
require 'essentials.php';


if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['fp_code'])){
    

     $fp_code = $_POST['fp_code'];
    if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Confirm password must match with the password.'; 
        }else{

           $sql= "select * from registeration where 'U_Str' = '$fp_code'";
           if($query_run=mysqli_query($con,$query))
                  {
                    $query_num_rows=mysqli_num_rows($query_run);
                    $row= mysqli_fetch_array($query_run,MYSQLI_ASSOC);           
                  }
        }
   
      ?>


      <!-- <div class="container">
        <div class="regisFrm">
          <form action="forgotPassword.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <div class="send-button">
              <input type="submit" name="forgotSubmit" value="CONTINUE">
            </div>
          </form>
        </div>
      </div>
 -->
  <div class="container" style="padding-top:80px">
    <div class-"row">
      <div class="col-md-6" style="color:#2e2b2c; float : none; margin:0 auto; width:40%">

<form  style="padding-top:20px;margin-top:20px;" action="resetpassword.php" method="POST">
        <h2>Reset Account Password</h2>
            <div class="input-group" style="width:100%">
              <input type="password" name="password" placeholder="PASSWORD" required="">
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <button class="btn btn-md btn-primary btn-block" name="resetSubmit" type="submit" style="width: 150px">Reset Password</button>
            <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>

          </div>
          </form>

  <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    
</div>
</div>
</div>


       
    </div>

  </body>
  </html>




   