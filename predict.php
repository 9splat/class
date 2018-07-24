<?php 
	include_once 'connection/connection.php';
	// $match_id=$_GET['match_id'];
	$match_id=$_GET['match_id'];

	$query = "SELECT * FROM `matches` WHERE match_id='$match_id' ";
	

	$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Predict Score</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1><span class="label label-default">Predict score</span></h1>
			<label for="basic-url">
					<h4>
						<span class="label label-info">Enter scores below :</span>
					</h5>
				</label><br>
				<form action="enter_score_process.php" method="post">

				<div class="border" style="border: 8px solid gray;border-radius: 30px 200px 200px 30px; padding: 20px;">
					<?php foreach($result as $match){ ?>
						<input type="hidden" name="match_id" value="<?php echo $match['match_id']; ?>">
						<div class="input-group">
			    			<span class="input-group-addon" id="basic-addon3"><?php echo $match['home_team']; ?></span>
			 				<input type="text" name="home_score" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 200px;">
						</div>
						<br>
						<div class="input-group">
			    			<span class="input-group-addon" id="basic-addon3">
			    				<?php echo $match['away_team']; ?></span>
			 				<input type="text" name ="away_score" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 200px;">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Predict</button>
					<?php } ?>	
				</div>
			</form>
		</div>
	</div>
</body>
</html>
