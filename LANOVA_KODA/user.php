<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Avtod.NET | Video player</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<!-- JS ZA VIDEO -->
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
	    <script type="text/javascript" src="botr/upload.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  
	</head>
	<body>

			<!-- Header -->
			
			<?php
				include 'header_home.php'
				
			?>
			<!-- Main -->
<div class="wrapper style2">
					<div class="title">Profil: <?php echo $_SESSION['login_user'] ?></div>
					<div id="main" class="container">
					    <div class="predvajalnik">
					    <section id="features">

                       <?php
    include_once 'db.php';   
    $uporabnik = $_SESSION['login_user'];
    $fileName = mysqli_query($db, "SELECT profile_pic FROM users WHERE username = '$uporabnik'");
  //  $file_path = "profilne_slike/'$uporabnik'/'$fileName'";
 while ($row = $fileName->fetch_assoc()) {
     
     if ( $row['profile_pic'] == '')
     {
         echo 'Nimate še nastavljene profilne slike!<br>';
          echo     "<img src=basic_profile_image/slika.png height=250 width=300>"  ;
     }
        else 
        {
           echo     "<img src=profilne_slike/$uporabnik/$row[profile_pic] height=250 width=300>"  ;
        }
 }
 ?>

            <br>          
            <h2> Posodobite sliko tukaj! </h2>
                    <form enctype="multipart/form-data" method="post" action="profilna_slika_upload.php">
   <input name="uploaded_file" accept="image/*" type="file"/> <br>
<br> <input class="btn btn-primary btn-lg btn-block" type="submit" value="Upload It" required="required"/>

<?php
	include 'test.php'
?>
</form>
</section>
</div>
 </div>
</div>
	</body>
</html>