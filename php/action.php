<?php

session_start();
$user=$_POST['email'];
$pass=$_POST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);

$ret=mysqli_query( $conn, "SELECT email,password FROM logindetails WHERE email='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
$row = mysqli_fetch_assoc($ret);

if(!$row) {
			//not found
            
            header('location: /index.php');

		}
		else {
			//found
			$_SESSION['login_user']=$user;
			header('location: /council.php');

		}

 ?>
