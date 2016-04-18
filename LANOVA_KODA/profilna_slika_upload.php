<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}

include_once 'db.php';   
    
// Access the $_FILES global variable for this specific file being uploaded
// and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); 
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
// $fileName = time().rand().".".$fileExt;
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    $error= 'Niste izbrali slike!';
    header("Location: user.php?error=$error");
    
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes

    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    
    $error="Vaša slika ne sme presegati 5MB!";
    header("Location: user.php?error=$error");
    
    
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types   
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    $error="Vaša slika mora biti tipa .gif, .jpg ali .png!";
    header("Location: user.php?error=$error");
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    
    
    $error="Prišlo je do napake med nalaganjem vaše slike!";
    header("Location: user.php?error=$error");
    
    exit();
}


 $preveri_sliko = mysqli_query($db, "SELECT profile_pic FROM users WHERE profile_pic='profilne_slike/".$_SESSION['login_user']."/$fileName'"); //preveri če uporabnik v databazi že obstaja
 $prestej= mysqli_num_rows($preveri_sliko); // ce obstaja bo prestej 1, ce ne pa 0

  if ($prestej!=0) //preveri num rows 
  {
    $error="Ta slika že obstaja v podatkovni bazi.";
      header('Location: user.php?error='.$error);
  }
  else 
  {
//"uploads/".$_SESSION['email'].'/'

// END PHP Image Upload Error Handling ----------------------------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "profilne_slike/".$_SESSION['login_user']."/$fileName");
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    $error="Prišlo je do napake med nalaganjem vaše slike, poskusite znova.";
    header("Location: user.php?error=$error");
    exit();
}

$uporabnik = $_SESSION['login_user'];


$username = ($_SESSION['login_user']);
$queryreg = mysqli_query($db, "
            
            UPDATE users SET profile_pic='$fileName' WHERE username = '$username'");
$error="Slika naložena.";
      header('Location: user.php');
 
  }

?>

