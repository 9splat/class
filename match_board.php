<?php 
	$conn = mysqli_connect('localhost','root','','worldcup');
	$query = 'SELECT * FROM matches';
	$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Match Prediction Board</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h3><span class="label label-default">Worldcup 2018</span> Prediction Board</h3>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">Home</a></li>
				<li role="presentation"><a href="#">Profile</a></li>
				<li role="presentation"><a href="user_signup.php" target="_top">Sign up</a></li>
			</ul>
			<form action="" method="post">
				<table class="table">
					<tr class="panel panel-heading">
						<th >Match id</th>
						<th >Home team</th>
						<th >Away team</th>
						<th >Time</th>
						<th >Action</th>
					</tr>
					<?php foreach($result as $match){ ?>
					<tr>
						<td><?php echo $match['match_id']; ?></td>
						<td><?php echo $match['home_team']; ?></td>
						<td><?php echo $match['away_team']; ?></td>
						<td><?php echo $match['time']; ?></td>
						<td>
							<a href="predict.php?match_id=<?php echo $match['match_id']; ?>" class="btn btn-primary" role="button">Predict</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</form>
		</div>
	</div>
</body>
</html>
