<?php
require 'connect.inc.php';
require 'session.php';
session_destroy();
unset($_SESSION['EmpID']);
unset($_SESSION['Admin_Status']);
header('Location:index.php')

?>
