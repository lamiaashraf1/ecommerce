<?php 
include 'connection.php';
$id = $_GET['id'];

$delete = "DELETE FROM product WHERE id = $id";
$conn->query($delete);

header("Location:../product.php");