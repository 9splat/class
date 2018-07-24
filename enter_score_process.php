<?php

$connection = mysqli_connect('localhost', 'root', '', 'worldcup');

$matchId =  $_POST['match_id'];
$homeScore = $_POST['home_score'];
$awayScore = $_POST['away_score'];


$selectUserPredictionQuery = "select id from predictions where match_id = $matchId and user_id = 1";
$result = mysqli_query($connection, $selectUserPredictionQuery);

$predictionCount = mysqli_num_rows($result);

if($predictionCount === 0){
	$query = "insert into predictions(home_team_score, away_team_score, match_id, user_id) values($homeScore, $awayScore, $matchId, 1)";
	mysqli_query($connection, $query);
	echo "Sucessfully submitted the score";
} else {
	echo "A record already exists for you.";
}
//update predictions set home_score = $homeScore, away_score = $awayScore where match_id = $matchId and user_id = 1












