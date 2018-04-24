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
   $error = 0;
    if(isset($_POST['forgotSubmit'])){
    //check whether email is empty
      if(!empty($_POST['email'])){
        $to = $_POST['email'];   
        echo "emial". $to;     
        $sql= "select * from registeration where Email = '$to'";
           if($query_run=mysqli_query($con,$sql))
                  {
                    $query_num_rows=mysqli_num_rows($query_run);
                    if($query_num_rows==0){
                       $sessData['status']['type'] = 'error';
                       $sessData['status']['msg'] = 'Email does not exist!';
                       $error = 1;
                    }else{
                    
                    $row= mysqli_fetch_array($query_run,MYSQLI_ASSOC);

                  }
          }else{
              $sessData['status']['type'] = 'error';
              $sessData['status']['msg'] = 'Some problem occured!';
              $error = 1;
          }

          echo "error". $error;
        if($error == 0){
        $uniqidStr = md5(uniqid(mt_rand()));
        $resetPassLink = 'http://localhost/vikasTechnoSchool/web/resetpassword.php?fp_code='.$uniqidStr;
        $empId = $row['EmpID'];
        echo "empId".$empId;
        $sql1 = "UPDATE registeration set U_Str = '$uniqidStr' where EmpID = '$empId' ";           
        mysqli_query($con,$sql1))
        $to = $_POST['email'];
        $subject = "Password Update Request";
        $mailContent = 'Dear, 
        <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
        <br/>To reset your password, visit the following link: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
        <br/><br/>Regards,
        <br/>CodexWorld';
                //set content-type header for sending HTML email
     //   $headers = "MIME-Version: 1.0" . "\r\n";
       // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                //additional headers
        $headers = 'From: Varun' . "\r\n";
                //send email
   
        // ini_set("SMTP","ssl://smtp.gmail.com");
        //ini_set("smtp_port","587");
   
        mail($to,$subject,$mailContent,$headers);

   
  // mail("varun.machingal@gmail.com",$subject,"hi","From: vaun.machingal@gmail.com\n");



        $sessData['status']['type'] = 'success';
        $sessData['status']['msg'] = 'Please check your e-mail, we have sent a password reset link to your registered email.';
        $statusMsg = $sessData['status']['msg'];
        $statusMsgType = $sessData['status']['type'];
      }
      }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Some problem occurred, please try again.';
        $statusMsg = $sessData['status']['msg'];
        $statusMsgType = $sessData['status']['type'];
      }
      

      $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
      if(!empty($sessData['status']['msg'])){
        $statusMsg = $sessData['status']['msg'];
        $statusMsgType = $sessData['status']['type'];
        unset($_SESSION['sessData']['status']);
      }
    }else{
        $statusMsg = "";
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

<form  style="padding-top:20px;margin-top:20px;" action="forgotPassword.php" method="POST">
        <p>Enter the Email of Your Account to Reset New Password</p>
            <div class="input-group" style="width:100%">
              <input type="email" name="email" placeholder="EMAIL" required="">
              <button class="btn btn-md btn-primary btn-block" name="forgotSubmit" type="submit" style="width: 150px">continue</button>
          </div>
          </form>
  <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    
</div>
</div>
</div>


       
    </div>

  </body>
  </html>




   