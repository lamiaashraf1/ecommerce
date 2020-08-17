<?php
$conn = new mysqli("localhost","root","","project1");
$conn -> set_charset("utf8");
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

$update = "UPDATE user SET username = '$username' ,firstname='$firstname',lastname='$lastname', phone = '$phone' ,address = '$address',email = '$email' WHERE id = $id";
$update2 = "UPDATE cart SET sent ='1' WHERE id_user = '$id'  "


$conn->query($update);
header("Location: login.php")

