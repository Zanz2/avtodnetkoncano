<?php
session_start();
/*
if(empty($_SESSION['login_user']))
{
header('Location: LANOVA_KODA/home.php');
}
*/
?>
<html>
	<head>
		<link rel="stylesheet" href="assets/css/main.css" />
	
</html>
<body>
	
              
                  <a href="aktivna_tabela/index.php">aktivna tabela</a>
              
                  <a href="../../LANOVA_KODA/index.php">Glavna stran</a>
              
              
           
			<div class="predvajalnik">
<form method = "post" name = "upload" action = "upload_tabela_insert.php" enctype="multipart/form-data">

	       

	        <label>Izberite  tabelo (najbolj optimalna je excel tabela (max 1.5 Mb)), izgled naj bo kot spodnji</label>
	        <br>
<table border=1><tr><td>Proizvajalec</td><td>Kategorija</td><td>Cena</td><td>Naziv (ime)</td></tr></table>
	        <br>

	        <br>

	        <label>Upload:</label>

	        <input type = "file" name = "path">

	        <input type = "submit" name = "submit" value = "Upload!">

	       

	        </form>
</div>
<?php
                if (!empty($_GET['obvestilo'])) {
    $obvestilo=$_GET['obvestilo'];
                echo $obvestilo;
                echo '<br>';
                }
                ?>
</div>
</body>
</head>