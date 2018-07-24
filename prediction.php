<?php 
	$connection = mysqli_connect('localhost','root','','worldcup');
	$query = ("insert into users(first_name,last_name,email) values($_POST[username],$_POST[password],$_POST[email])");
	$result = mysqli_query($connection,$query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prediciton</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h1>SIGN UP FOR WORLDCUP PREDICTION</h1>
			<form action="prediction_res.php" method="post">
				<table>
					<tr>
						<th><label for="username">Username:</label></th>
						<td><input type="text" name="username" placeholder="Username"></td>
					</tr>
					<tr>
						<th><label for="email">E-mail:</label></th>
						<td><input type="email" name="email" placeholder="E-mail"></td>
					</tr>
					<tr>
						<th><label for="password">Password:</label></th>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Submit"></td>
					</tr>
<!-- insert into users(first_name,last_name,email) values('$_POST['username'],'$_POST['password'],'$_POST['email'])
 -->				</table>
			</form>
		</div>
	</div>
</body>
</html>
