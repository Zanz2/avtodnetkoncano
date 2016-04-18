 <?php  
 $username = getenv('C9_USER');
$password = '';
$server = getenv('IP');
$db_name = 'phpexcelltest';
$dbport = 3306;

 $connect = mysqli_connect($server, $username, $password, $db_name, $dbport)or die(mysqli_error($link));
 $sql = "DELETE FROM ostalo WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Podatki zbrisani';  
 }  
 ?>  