<?php 
	include_once 'connection/connection.php';
	$home = $_POST['ho'];
	$away = $_POST['aw'];
	$query = " INSERT INTO predicted_score(home_prediciton,away_prediciton) VALUES('$home','$away');";
	mysqli_query($conn,$query);
	header('Location: predict.php?submit=success');
 ?>