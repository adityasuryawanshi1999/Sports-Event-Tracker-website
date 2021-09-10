<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);

     $match_id = $_POST['match_id'];
     $winner = $_POST['winner'];


     $sql = "INSERT INTO results (winner,matchid)
     VALUES ('$winner','$match_id')";

     if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>
