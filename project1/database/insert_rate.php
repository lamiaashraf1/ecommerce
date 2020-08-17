<?php

include"connection.php";
$rate= $_POST['rate'];
$id_user= $_POST['id_user'];
$id_product= $_POST['id_product'];
$insert ="INSERT INTO rate(rate,id_user,id_product) VALUES('$rate','$id_user','$id_product')";
$conn -> query($insert);



?>
