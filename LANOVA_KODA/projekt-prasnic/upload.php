<?php
if(!empty($_FILES)){
	
	//database configuration
	$dbHost = getenv('IP');
	$dbUsername = 'zanr512';
	$dbPassword = '';
	$dbName = 'projekt';
	//connect with the database
	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	if($mysqli->connect_errno){
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	$targetDir = "images/";
	$fileName = $_FILES['file']['name'];
	$targetFile = $targetDir.$fileName;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		//insert file information into db table
		$conn->query("INSERT INTO images (image, created, modified) VALUES('".$fileName."','".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
	}
	
}
?>