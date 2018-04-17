<?php

require 'connect.inc.php';

$Email= $_POST['email'];
$EmpID= $_POST['empid'];
$pass= md5($_POST['psw']);
$con_pass= md5($_POST['psw-repeat']);

if($pass==$con_pass){
  $sql= "INSERT INTO Registeration(Email,EmpID,Password,Confirm_Pass) VALUES('$Email','$EmpID','$pass','$con_pass')";
  mysqli_query($con,$sql);
  echo 'inserted';
  header('Location: http://localhost/vikasTechnoSchool/web/index.html');
  exit();
}


else
{
  echo 'Not Insert';
  header("refresh:3; url=registeration.html");
}

 ?>
