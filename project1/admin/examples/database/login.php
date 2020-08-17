<?php 
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$select= "SELECT * FROM admin WHERE username ='$username' AND password = '$password' ";
	$result = $conn -> query($select);
	$count = $result->num_rows;
	if ($count > 0) {
	$_SESSION['username'] = $username;
	header("Location:../dashboard.php");
	}
	else{
		header("Location:../login.php");
	}
}

?>



