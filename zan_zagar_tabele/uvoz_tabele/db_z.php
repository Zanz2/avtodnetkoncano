<?php
$username = getenv('C9_USER');
$password = '';
$server = getenv('IP');
$db_name = 'phpexcelltest';
$dbport = 3306;

$link = mysqli_connect($server, $username, $password, $db_name, $dbport)or die(mysqli_error($link));
//uft8 and php driver error fix
mysqli_query($link, "SET NAMES 'UTF8'");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

?>