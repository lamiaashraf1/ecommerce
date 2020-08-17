<?php 
include 'connection.php';
$id = $_POST['id'];

$name = $_POST['name'];
$price =$_POST['price'];
$category = $_POST['category'];
$sale = $_POST['sale'];
$discription = $_POST['discription'];


$img = $_FILES['img']['name'];
$img_temp = $_FILES['img']['tmp_name'];


if (!empty($img)) {
	
	$x = "upload/". $img;
	move_uploaded_file($img_temp, $x);
	$up_img = "UPDATE product SET img = '$img' WHERE id = $id";
	$conn->query($up_img);
}




$update = "UPDATE product SET name = '$name' ,price='$price',category='$category', sale = '$sale' ,discription = '$discription' WHERE id = $id";

$conn->query($update);
header("Location:../product.php")




?>