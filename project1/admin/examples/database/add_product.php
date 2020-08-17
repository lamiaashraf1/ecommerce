<?php
if (isset($_POST['submit'])) {

	include 'connection.php';
$name = $_POST['name'];
$price= $_POST['price'];
$category= $_POST['category'];
$sale= $_POST['sale'];
$img= $_FILES['img']['name'];
$img_temp = $_FILES['img']['tmp_name'];
	$x = "upload/".$img_temp;
	move_uploaded_file($img_temp, $x);
	$up_img = "UPDATE product SET img = '$img' WHERE id = $id";
	$conn->query($up_img);
$discription = $conn->real_escape_string($_POST['discription']);

$insert = "INSERT INTO product (name,price,category,sale,img,discription) VALUES ('$name' , '$price','$category','$sale','$img','$discription')";
$conn ->query($insert);

 header("location:../product.php");
}