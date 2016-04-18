
 <?php  
 $username = getenv('C9_USER');
$password = '';
$server = getenv('IP');
$db_name = 'phpexcelltest';
$dbport = 3306;

 $connect = mysqli_connect($server, $username, $password, $db_name, $dbport)or die(mysqli_error($link));
 $sql = "INSERT INTO ostalo(ime, cena, sifra, k_ime, p_ime) VALUES('".$_POST["ime"]."', '".$_POST["cena"]."', '".$_POST["sifra"]."', '".$_POST["k_ime"]."', '".$_POST["p_ime"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Podatki vstavljeni';  
 }  
 ?>  
