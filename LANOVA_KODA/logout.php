<?php
session_start();
if(!empty($_SESSION['login_user']))
{
$_SESSION['login_user']='';
header("Location:index.php");
}
else 
   echo 'NI TE ODJAVLO';

?>
