<?php 
include 'connection.php';
$id = $_GET['id'];

$delete = "DELETE FROM category WHERE id = $id";
$conn->query($delete);

header("Location:../category.php");