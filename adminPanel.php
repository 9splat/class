<?php 
	// include_once 'connection/connection.php';
	$conn=mysqli_connect('localhost','root','','worldcup');
	$query = 'SELECT email,username	 FROM users';
	$result = mysqli_query($conn,$query);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>request panel</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<h2><span class="label label-default">request panel</span></h2>
			<table class="table">
				<tr>
					<th>Email</th>
					<th>Username</th>
					<th>Action</th>
				</tr>
			<?php foreach($result as $user){ ?>
				<tr>
					<td><?php echo $user['email'];?></td>
					<td><?php echo $user['username'];?></td>
					<td><button class="btn btn-primary">Accept</button>
					<button class="btn btn-danger">Reject</button></td>

				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>