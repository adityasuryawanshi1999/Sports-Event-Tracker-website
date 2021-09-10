<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);

     $points = $_POST['points'];
     $classA = $_POST['classA'];
     $value = $_POST['value'];



     $sql = "DELETE FROM spurthitally WHERE class='$classA' and games='$value' and points='$points'";

     if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>
