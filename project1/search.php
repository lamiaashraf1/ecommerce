<?php
include 'database/connection.php';
$search= $_POST['search'];
$select = "SELECT * FROM product WHERE name like '%$search%'";
$result = $conn ->query($select);
foreach ($result as $key ) {
?>
<li><a href="product-detail.php?id=<?php echo $key['id']?>"><?php echo $key['name'];?></a></li>
<?php
}


?>