<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$choice=$_GET['q'];
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"DELETE FROM schedule WHERE matchid='$choice'");


 ?>
