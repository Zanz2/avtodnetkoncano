<?php
class DB{
	function __construct(){
		//database configuration
		$dbServer = getenv('IP'); //Define database server host
		$dbUsername = 'zanr512'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'projekt'; //Define database name
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
        
        
	
	function getRows(){
		$query = mysqli_query($this->connect,"SELECT * FROM `images` ORDER BY `order` ASC") or die(mysql_error());
		while($row = mysqli_fetch_assoc($query))
		{
			$rows[] = $row;
		}
		return $rows;
	}
	
	function updateOrder($id_array){
		$count = 1;
		foreach ($id_array as $id){
			$update = mysqli_query($this->connect,"UPDATE `images` SET `order` = $count WHERE id = $id");
			$count ++;	
		}
		return true;
	}
}
?>