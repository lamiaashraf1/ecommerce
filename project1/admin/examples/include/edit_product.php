<?php 
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM product WHERE id = $id ";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>



<form class="form-group" action="database/edit_product.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Name:</label>

	<input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control"><br>
	<label>Price:</label>
	<input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>">
	

	<label>Category:</label>
	<select class="form-control" name ="category">
		<option selected=""></option>
		<?php
		include 'database/connection.php';
		$select = "SELECT * FROM category";
		$result = $conn->query($select);
		foreach ($result as $key) {

		?>
		<option value="<?php echo $key['name']; ?>"><?php echo $key['name']; ?></option>
		
	<?php } ?>
	</select>
	<label>Sale:</label>
	<input type="text" name="sale"value="<?php echo $row['sale'] ?>"  class="form-control">
	
	<label>Img:</label>
	<img style="width: 50px;height: 50px;" src="database/upload/<?php echo $row['img']; ?>">
	<input type="file" name="img" class="form-control">
	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	<label>Discription:</label>
	<input type="text" name="discription" value="<?php echo $row['discription'] ?>" class="form-control">
	


</form>