<?php

session_start();
	include 'connection.php';
$id_product = $_POST['id_product'];
$id_user =  $_POST['id_user'];
$quantity =  $_POST['quantity'];

$insert = "INSERT INTO cart (id_product,id_user,quantity)VALUES('$id_product','$id_user', '$quantity')";
$conn ->query($insert);



 