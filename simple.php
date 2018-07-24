<?php 
	include_once 'connection/connection.php';
	$match_id=$_GET['match_id'];

	$query = "SELECT * FROM `matches` WHERE match_id='$match_id' ";
	

	$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>

<body>
	<h1>heading</h1>
	<form action="enter_score_process.php" method="post">
					<?php foreach($result as $match){ ?>
						<input type="hidden" name="match_id" value="<?php echo $match['match_id']; ?>">
						<div class="input-group">
			    			<label ><?php echo $match['home_team']; ?></label>
			 				<input type="text" name="home_score" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 200px;">
						</div>
						<br>
						<div class="input-group">
			    			<label class="input-group-addon" id="basic-addon3">
			    				<?php echo $match['away_team']; ?></label>
			 				<input type="text" name ="away_score" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 200px;">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Predict</button>
					<?php } ?>	
				</div>
			</form>
</body>
</html>