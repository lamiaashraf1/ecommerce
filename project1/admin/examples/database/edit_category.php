<?php 
include 'connection.php';
$id = $_POST['id'];

$name = $_POST['name'];
$up = "UPDATE category SET name = '$name' WHERE id = $id";
$conn->query($up);

header("Location:../category.php")




?>