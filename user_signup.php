<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1><span class="label label-default">SIGN UP</span>
			</h1><br>
			<form action="registration.php" method="post">
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3">First Name</span>
			 		<input type="text" name="fName" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 300px;">
				</div><br>
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3">Last Name</span>
			 		<input type="text" name="lName" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 300px;">
				</div><br>
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3" style="width: 93px;">E-mail</span>
			 		<input type="text" name="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 300px;">
				</div><br>
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3">Username</span>
			 		<input type="text" name="username" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 300px;">
				</div><br>
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3">Gender</span>
			        <input type="radio" name="gender" value="male">Male
			        <input type="radio" name="gender" value="female">Female
			     </div><br>
				<div class="input-group">
			    	<span class="input-group-addon" id="basic-addon3">Password</span>
			 		<input type="text" name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" style="width: 300px;">
				</div><br>
				<button class="btn btn-primary" style="width: 150px;">Submit</button>
			</form>
		<!-- 	Home button
			<div class="home" style="float: left; position: relative; left: -60px; bottom:250px;">
				<a href="match_board.php" style="text-decoration: none; color: black;" class="glyphicon glyphicon-home"></a>
			</div> -->
		</div>
	</div>
</body>
</html>