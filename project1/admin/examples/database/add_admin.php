<?php
if (isset($_POST['submit'])) {

	include 'connection.php';
$username = $_POST['username'];
$password = md5 ($_POST['password']);
$insert = " INSERT INTO admin (username,password)VALUES('$username','$password')";
$conn ->query($insert);

header("location:../dashboard.php");
}