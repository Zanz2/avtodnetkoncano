
<div id="odmik">

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
