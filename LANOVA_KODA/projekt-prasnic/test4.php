<?php
include_once("db.php");
$db = new DB();
?>
<?php

$username = 'zanr512';
$password = '';
$server = getenv('IP');
$db_name = 'projekt';


$link = mysqli_connect($server, $username, $password, $db_name);
//uft8 and php driver error fix
mysqli_query($link, "SET NAMES 'UTF8'");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Change Image Extensions</title>
</head>
<body>
    <?php 
			//Fetch all images from database
			$rows = $db->getRows();
			foreach($rows as $row): ?>
    <?php
    
        $slika = "images/".$row['image'];
        $slika2 = "images/".$row['image'];
        $slika3 = $row['image'];
        $slika = substr_replace($slika , 'jpg', strrpos($slika , '.') +1);
        
        $info = pathinfo($slika3);
        $slika4 =  basename($slika3,'.'.$info['extension']);
        $slika4 = $slika4.".jpg";
        if($slika!=$slika2)
        {
            rename ("$slika2", "$slika");
            $sql = "UPDATE images SET image='$slika4' WHERE image='$slika3'";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
            echo "Slika: ".$slika3." se je spremenila v ".$slika4."<br>";
            
        }
        ?>
    <?php endforeach;?>
        
        
</body>
</html>