<?php
	$host="localhost";
	$user="root";
	$pwd="";
	$db="projectamc";
	
	$con=mysqli_connect($host,$user,$pwd,$db);
	if(!$con)
	{
		echo "Connection error";
	}
	else{
		echo "connection sucess";
	}
?>