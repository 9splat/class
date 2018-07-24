<?php 
	include_once 'connection/connection.php';

	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "INSERT INTO users(first_name,last_name,gender,email,username,password) VALUES('$fName','$lName','$gender','$email','$username','$password');";
	// echo $query;
	// die;

	mysqli_query($conn,$query);
	header('Location:user_signup.php?signup=success');
 ?>