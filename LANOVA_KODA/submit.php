<?php
include('db.php');
// Fetching Values From the post method
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
if (isset($_POST['username'])) {
$query = mysqli_query($db,"insert into users(username, email, password) values ('$username', '$email', '$password')"); //Insert Query
    $mesto = ("profilne_slike/".$username); 
    mkdir($mesto, 0777); 
echo "Form Submitted succesfully";
}
?>
