<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword  = "";
	$dbName = "fyp";
	
	// connect to the database
	$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
