<?php

session_start();
	include 'connection.php';
$id_product = $_POST['id_product'];
$id_user =  $_POST['id_user'];


$insert = "INSERT INTO wishlist (id_product,id_user)VALUES('$id_product','$id_user')";
$conn ->query($insert);



 