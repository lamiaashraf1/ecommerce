<?php 
include 'connection.php';
$id = $_POST['id'];

$username = $_POST['username'];
$password =$_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];



if (!empty($password)) {
	$password =md5($_POST['password']);
	$up = "UPDATE user SET password='$password' WHERE id = '$id'";
	$conn->query($up);
}

if (!empty($img)) {
	$img = $_FILES['img']['name'];
$img_temp = $_FILES['img']['tmp_name'];
	$x = "upload/".$img_temp;
	move_uploaded_file($img_temp, $x);
	$up_img = "UPDATE user SET img = '$img' WHERE id = $id";
	$conn->query($up_img);
}




$update = "UPDATE user SET username = '$username' ,firstname='$firstname',lastname='$lastname', phone = '$phone' ,age = '$age' ,email = '$email',address = '$address' WHERE id = $id";

$conn->query($update);

header("Location:../user.php")




?>