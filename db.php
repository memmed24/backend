<?php  
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "backend";
	$db_con =  mysqli_connect($localhost, $username, $password, $dbname);
	if(!$db_con){
		echo "Connected";
	}
?>