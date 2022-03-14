<?php 

	session_start();

	

	$conn = mysqli_connect('localhost','root','','sessionpractical');

	$name=$_POST['user'];
	$pass=$_POST['password'];

	if($conn){
		echo "<h1> Hello, $name </h1>";
	}
	else{
		echo "No connected";
	}
?>