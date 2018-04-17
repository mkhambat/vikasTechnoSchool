<?php
require 'connect.inc.php';
require 'session.php';
session_destroy();
unset($_SESSION['EmpID']);
header('Location:index.html')

?>
