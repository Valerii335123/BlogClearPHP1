<?php
//підключення до бази даних
$conn=mysqli_connect("localhost","root","","myblog");

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}

?>
