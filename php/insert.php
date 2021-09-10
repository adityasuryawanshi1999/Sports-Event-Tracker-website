<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);

     $date = $_POST['date'];
     $classA = $_POST['classA'];
     $classB = $_POST['classB'];
     $game = $_POST['game'];
     $time = $_POST['time'];
     $category = $_POST['category'];



     $sql = "INSERT INTO schedule (date,classA,classB,game,time,category)
     VALUES ('$date','$classA','$classB','$game','$time','$category')";

     if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


?>
