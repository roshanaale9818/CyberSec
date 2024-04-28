<?php

$servername="localhost";
$username = "webMan";
$password = "Byteiq123$";
$db = "ecommerce"; //do not change

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}


?>