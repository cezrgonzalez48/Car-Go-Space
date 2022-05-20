<?php

	$sname = "localhost";
	$unmae = "root";
	$password = "R00tP@55w0rd";
	
	$db_name = "car_go_space_tables";
	
	$conn = mysqli_connect($sname, $unmae, $password, $db_name);
	
	if(!$conn){
		echo"connection failed";
	}
	