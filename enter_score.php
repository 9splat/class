
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enter score</title>
</head>
<body>
	<h1>Enter your prediction score below</h1>
	<form action="enter_score_process.php" method="post">
		<table border="1">
			<tr>
				<td><label for="">YOUR PREDICTED <strong>HOME COUNTRY / COUNTRY 1</strong></label></td>
				<td><input type="text" name="prediction_home_country" placeholder="COUNTRY 1"></td>
			</tr>
			<tr>
				<td><label for="">YOUR PREDICTED <strong>AWAY COUNTRY / COUNTRY 2</strong></label></td>
				<td><input type="text" name="prediction_away_country" placeholder="COUNTRY 2"></td>
			</tr>
			<tr>
				<td><label for="">YOUR PREDICTION FOR <strong>HOME</strong> TEAM</label></td>
				<td><input type="text" name="prediction_home" placeholder="HOME TEAM SCORE"></td>
			</tr>
			<tr>
				<td><label for="">YOUR PREDICTION FOR <strong>AWAY</strong> TEAM</label></td>
				<td><input type="text" name="prediction_away" placeholder="AWAY TEAM SCORE"></td>
			</tr>
			<tr>
				<td><input type="submit" value="submitt"></td>
			</tr>
		</table>
	</form>

</body>
</html>