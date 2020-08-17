<?php 
if(isset($_POST['submit'])){


include 'connection.php';
$name = $_POST['name'];

$insert = "INSERT INTO category(name)VALUES('$name')";
$conn->query($insert);
header("Location:../category.php");



}
