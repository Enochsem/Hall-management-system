<?php 

$conn= new mysqli('localhost','root','','hall');

if (mysqli_connect_error()) {
	# code...
	die('CONNECTION ERROR:'.mysqli_connect_error());
}

?>