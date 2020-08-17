<?php

include 'connection.php';
$id = $_POST['id'];

$up = "UPDATE message SET seen = '1' WHERE id = $id";
$conn->query($up);


$sel = "SELECT * FROM message WHERE seen = '0'";
$result = $conn->query($sel);
$count = $result->num_rows;
echo $count;