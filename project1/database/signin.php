<?php 
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$select= "SELECT * FROM user WHERE username ='$username' AND password = '$password' ";
	$result = $conn -> query($select);
	$count = $result->num_rows;
	if ($count > 0) {
		$user = $result-> fetch_assoc();
		$id = $user['id'];
	$_SESSION['id'] = $id;	
	$_SESSION['username'] = $username;
	header("Location:../index.php");
	}
	else{
		header("Location:../signin.php");
	}
}


?>



