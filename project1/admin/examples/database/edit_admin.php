<?php 
include 'connection.php';
$id = $_POST['id'];

$username = $_POST['username'];
$password = md5($_POST['password']);

$update = "UPDATE admin SET username = '$username', password = '$password' WHERE id = $id";

$conn->query($update);

header("Location:../dashboard.php")




?>