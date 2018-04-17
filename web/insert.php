<?php

require 'connect.inc.php';
$First= $_POST['first'];
$Last= $_POST['last'];
$Email= $_POST['email'];
$EmpID= $_POST['empid'];
$pass= md5($_POST['psw']);
$con_pass= md5($_POST['psw-repeat']);

if($pass==$con_pass){
  $sql= "INSERT INTO Registeration(First,Last,Email,EmpID,Password,Confirm_Pass) VALUES('$First','$Last','$Email','$EmpID','$pass','$con_pass')";
  mysqli_query($con,$sql);
  echo 'inserted';
  header('Location:login.php');
  exit();
}


else
{
  echo 'Not Insert';
  header("refresh:3; url=registeration.html");
}

 ?>
