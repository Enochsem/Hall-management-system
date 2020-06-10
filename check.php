<?php 
session_start();
include('connection.php');
 
// if ($connection) {
// 	# code...
// }else{
// 	header('Location:connection.php');
// }


if (!$_SESSION['username']) {
	
	header('Location:login.php');
}

// this line will redirect the page to the log in if username and password are not entered in the login page
?>