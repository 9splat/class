<?php 
	$connection = mysqli_connect('localhost','root','','worldcup');
	$query = ("insert into users(first_name,last_name,email) values($_POST[username],$_POST[password],$_POST[email])");
	$result = mysqli_query($connection,$query);
 ?>