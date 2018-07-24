<?php 
	$conn = mysqli_connect('localhost','root','','worldcup');
	$query = 'SELECT matches.match_id,matches.home_team,matches.away_team,predictions.home_team_score,predictions.away_team_score FROM matches,predictions WHERE matches.match_id=predictions.match_id';
	$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Match Score Board</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h3><span class="label label-default">Worldcup 2018</span> Score Board</h3>
			<form action="" method="post">
			<table class="table">
				<tr>
					<th rowspan="2">Match ID</th>
					<th rowspan="2">Home team</th>
					<th rowspan="2">Away team</th>
					<th colspan ="2">Predicted score</th>	
				</tr>
				<tr>
					<td>Home Prediction</td>
					<td>Away Prediction</td>
				</tr>
				<?php foreach($result as $match){ ?>
				<tr>
					<td><?php echo $match['match_id']; ?></td>
					<td><?php echo $match['home_team']; ?></td>
					<td><?php echo $match['away_team']; ?></td>
					<td><?php echo $match['home_team_score']; ?></td>
					<td><?php echo $match['away_team_score']; ?></td>
				</tr>
				<?php } ?>		
		</div>
	</div>
	
			<!-- <tr>
       			<td rowspan="2">Top Left Header</td>
        		<td colspan="3">Call Standard</td>
    		</tr>
    		<tr>
		        <td>Flagged</td>
		        <td>Percent</td>
		        <td>Days</td>
   	 		</tr> -->
		</table>
	</form>
</body>
</html>