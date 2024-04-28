<?php

function connect(){
//get details from the previous page

	$servername = "localhost";
	$username = "webMan";
	$password = "Byteiq123$";
	$dtb="ecommerce";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dtb);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	return $conn;
	
	
}
?>

