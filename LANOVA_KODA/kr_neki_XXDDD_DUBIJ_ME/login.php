<?php
require_once 'db.php';
 
session_start();
$uName = $_POST['username'];
$pWord = md5($_POST['password']);
$qry = "SELECT uid FROM users WHERE username='$username' AND password='$password' AND status='active'";
$res = mysqli_query($db, $qry);
$num_row = mysqil_num_rows($db, $res);
$row=mysqli_fetch_assoc($db, $res);
if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['login_user'] = $row['username'];
	}
else {
	echo 'false';
}

?>