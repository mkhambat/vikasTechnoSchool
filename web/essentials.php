<?php

require 'connect.inc.php';
require 'session.php';
require 'check_login.php';
require 'get_field.php';


if(isset($_SESSION['EmpID'])&&!empty($_SESSION['EmpID']))
{
$result=getuserfield('First');
}
 ?>
