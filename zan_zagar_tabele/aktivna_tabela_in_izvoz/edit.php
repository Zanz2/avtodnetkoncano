 <?php  
 $username = getenv('C9_USER');
$password = '';
$server = getenv('IP');
$db_name = 'phpexcelltest';
$dbport = 3306;

 $connect = mysqli_connect($server, $username, $password, $db_name, $dbport)or die(mysqli_error($link));
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE ostalo SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Podatki posodobljeni';  
 }  
 ?>  