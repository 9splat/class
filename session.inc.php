<?php 
/*if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
*/
	include_once'connection/connection.php';
	$fname = $_POST['username'];
	$pwd = $_POST['password'];
	$sql='SELECT username,password FROM users where username = "$fname" AND password="$pwd"';
	$result = mysqli_query($conn,$sql);
	$check=mysqli_fetch_array($result);
	if(isset($check)){
		echo 'ok';
	}else{
		echo 'nope';
	}
 ?> 	 