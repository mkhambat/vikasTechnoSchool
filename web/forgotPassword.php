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
    // include("initial-header.php");
    // include("config.php");
    // include('swift/lib/swift_required.php');
    require 'connect.inc.php';
    require 'session.php';
    require 'check_login.php';

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', 'root123');
    define('DB_DATABASE', 'sample_db');
    $msg = "";
    $email_valid_flag = False;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email ID sent from form
      $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_DATABASE);
       
      $email_id = mysqli_real_escape_string($db,$_POST['Email']);
      //$otp = mysqli_real_escape_string($db,$_POST['otp']); 
      
      $sql = "SELECT Email FROM registration WHERE Email='$Email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      	
      if($count == 1) {
        $_SESSION['login_user'] = $email_id;
        $email_valid_flag = True;
        $random =  rand(100000,999999);
        $sql2 = "UPDATE registration SET otp=". $random ." WHERE Email='". $email_id. "'";
        $querry = mysqli_query($db,$sql2);
		
    		$to = $email_id;
    		$subject = 'Password-Recovery for Vikas Techno School';
    		$body = 'Greetings. Your one time password is: '.$random;
    		$headers = 'From: Vikas Techno School <vtsiit2011@gmail.com >' . "\r\n" .
    			'Reply-To: Vikas Techno School <vtsiit2011@gmail.com >' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();
    		$result = mail($to, $subject, $body, $headers);
 
      }else {
         $msg = "Email ID is blank or invalid";
      }
   }
?>

    <script language="Javascript">
    <!--
    function sendOTP()
    {
        document.Form1.action = "forgotPassword.php"
        document.Form1.submit(); 
        return true;
    }
    function verifyOTP()
    {
        document.Form1.action = "verify_otp.php"
        document.Form1.submit();
        return true;
    }
    -->
    </script>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Forgot Password</h6>
			                <div class="social">
	                            
	                        </div>
                      <form name="Form1" action = "" method = "post">
            <?php 
              $form = "";
              if (!isset($email_id)){
                $form .=  "<div class='input-group'>
                            <span class='input-group-addon'><i class='fa fa-envelope' aria-hidden='true'></i></span>
                            <input class='form-control' type='text' name = 'email_id' placeholder='Email ID' required autofocus>
                          </div>
                  <div class='already'>";
                  if (isset($msg)){
                    $form .= "<p> $msg </p>";
                  }
                $form .= "
                  </div>
                  <div class='action'>
                    <input type = 'button' class='btn btn-primary btn-block signup'  value = 'Send OTP' onclick='sendOTP();' />
                  </div>
                  </form>";
                
                echo $form;
              }
              else{
                if ($email_valid_flag){
                  $form .= "<input class='form-control' type='hidden' name = 'email_id' placeholder='Email ID' value = $email_id readonly><br>
                            <div class='input-group'>
                              <span class='input-group-addon'><i class='fa fa-key' aria-hidden='true'></i></span>
                              <input class='form-control' type='password' name = 'otp' placeholder='One-Time Password' autofocus required>
                            </div>
                    
                    <div class='already'>";
                    if (isset($msg)){
                      $form .= "<p> $msg </p>";
                    }
                  $form .= "  
                    </div>
                    
                     <div class='action'>
                      <input type = 'button' class='btn btn-primary btn-block signup'  value = 'Verify OTP' onclick='verifyOTP();' /><br />
                    </div> 
                    </form>";
                    
                  echo $form;
                }
                else{
                  $form .=  "<div class='input-group'>
                              <span class='input-group-addon'><i class='fa fa-envelope' aria-hidden='true'></i></span>
                              <input class='form-control' type='text' name = 'email_id' placeholder='Email ID' required autofocus>
                            </div>
                    <div class='already'>";
                    if (isset($msg)){
                      $form .= "<p> $msg </p>";
                    }
                  $form .= "
                    </div>
                    <div class='action'>
                      <input type = 'button' class='btn btn-primary btn-block signup'  value = 'Send OTP' onclick='sendOTP();' />
                    </div>
                    </form>";
                  
                  echo $form;
                  
                }
                
              }
            ?>         


                      <!-- <form name="Form1" action = "" method = "post">
  			                <input class="form-control" type="text" name = "email_id" placeholder="Email ID" required>
  			               
                        <div class="already">
                          <p><?php //if (isset($msg)) echo $msg ?></p>
                        </div>
  			                <div class="action">
                                  <input type = "button" class="btn btn-primary signup"  value = " Send OTP " onclick="sendOTP();" /> -->

                        
                                  
  			                </div> 
                      </form>        
			            </div>
			        </div>
			    </div>
			<!-- </div>
      <?php 
      // include('initial-footer.php'); ?>
		</div> -->
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>