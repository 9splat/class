<?php 
	$conn = mysqli_connect('localhost','root','','test');
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	/*$query = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last','$email','$uid','$pwd');";
	mysqli_query($conn,$query);

	header("Location: form.php?submit=success");*/
?>