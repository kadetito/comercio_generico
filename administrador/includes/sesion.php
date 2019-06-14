<?php 
 ////comprobar sesion login
if(isset($_SESSION['uid']))
{
 $session_uid=$_SESSION['uid'];
 $sesion = 1;
}
if(empty($session_uid))
{
$sesion = 0;
}

