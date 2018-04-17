<?php



function getuserfield ($field){
  require 'connect.inc.php';
$query="SELECT `$field`FROM `registeration` WHERE `EmpID`='".$_SESSION['EmpID']."'";
echo $query;
if($query_run=mysqli_query($con,$query))
{
 $query_result=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
 return $query_result[$field];
}
}
?>
