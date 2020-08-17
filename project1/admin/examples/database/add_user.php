<?php
if (isset($_POST['submit'])) {

	include 'connection.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$date = date("Y-m-d");
$img= $_FILES['img']['name'];
$img_temp = $_FILES['img']['tmp_name'];
move_uploaded_file($img_temp,"upload/img");


$insert = "INSERT INTO user(username,password,firstname,lastname,phone,address,age,gender,`u-date`,email,img)VALUES('$username','$password','$firstname','$lastname','$phone','$address','$age','$gender','$date','$email','$img')";
$conn->query($insert);
 echo $conn -> error;
header("Location:../user.php");
}