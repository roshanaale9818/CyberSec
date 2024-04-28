<?php
$username = $_POST['uname'];
$password_hashed = $_POST['hashed'];


$default_data_name = "";
$default_data = "";
$data_id = 0;

//decrypt the password

//$converter = new Encryption;

$log_time = Date("H:i:s");
$log_date = Date("Y-m-d");
$log_date2 = Date("d/m/Y");


$found = "default";

require_once("data_connector.php");

global $conn;
$conn=connect();

$SQL = "SELECT username,userID,password FROM users WHERE username='$username' AND password='".$password_hashed."'" ;


$result = $conn->query($SQL);

while ($row = $result->fetch_object()) {
    $found = $row->username;
    $user_id = $row->userID;
    
    $password = $row->password;
    


}







if($user_id!=""){
	ini_set('session.gc_maxlifetime', 7200);
	session_set_cookie_params(7200);
	session_start();
	$_SESSION['user_id'] = $user_id;
	
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/iod/home/?user_id=" . $user_id );
}else{
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/iod/index.php?result=false" );

}

?>