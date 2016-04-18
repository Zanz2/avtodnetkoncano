
<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
      include 'header_home.php';
        ?>

			

<html>
	<head>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
	<div class="wrapper style2">
	<div class="title">Upload tabele</div>
	<div id="main" class="container">
		<div class="predvajalnik">
					<section id="features">
			<div id="page-wrapper">

<form method = "post" name = "upload" action = "upload_tabela_insert.php" enctype="multipart/form-data">

	       

	        <label>Izberite  tabelo (najbolj optimalna je excel tabela (max 1.5 Mb)), izgled naj bo kot spodnji</label>
	        <br>
<table border=1><tr><td>|Proizvajalec|</td><td>Kategorija|</td><td>Cena|</td><td>Naziv (ime)|</td></tr></table>
	        <br>

	        <br>

	        <label>Upload:</label>

	        <input type = "file" name = "path">

	        <input type = "submit" name = "submit" value = "Upload!">

	       

	        </form>

</div>
</section>
<?php
                if (!empty($_GET['obvestilo'])) {
    $obvestilo=$_GET['obvestilo'];
                echo $obvestilo;
                echo '<br>';
                }
                ?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>