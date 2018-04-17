<?php

function loggedin(){
if(isset($_SESSION['EmpID'])&&!empty($_SESSION['EmpID']))
{
return true;
}
else
{
return false;
}

}
function adminloggedin(){
if(isset($_SESSION['adminid'])&&!empty($_SESSION['adminid']))
{
return true;
}
else
{
return false;
}

}


?>
