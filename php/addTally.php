<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);

     $points = $_POST['points'];
     $classA = $_POST['classA'];
     $games = $_POST['value'];



     $sql = "INSERT INTO spurthitally (class,games,points)
     VALUES ('$classA','$games','$points')";

     if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>
