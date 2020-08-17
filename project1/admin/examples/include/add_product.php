<form class="form-group" action="database/add_product.php" method="post" enctype="multipart/form-data">
	<label>name:</label>

	<input type="text" name="name" class="form-control"><br>
	<label>Price:</label>
	<input type="text" name="price" class="form-control">
	<label>sale:</label>
	<input type="text" name="sale" class="form-control">
	<label>discription:</label>
	<input type="text" name="discription" class="form-control">
		<label>category:</label>
	<select class="form-control" name="category">
		<option selected=""></option>
		<?php
		include"database/connection.php";
		$select = "SELECT * FROM category";
		$result = $conn->query($select);
		foreach ($result as $key) {

		?>
<option value="<?php echo $key['name'];?>"><?php echo $key['name'];?> </option>
<?php } ;?>


	</select>



		<label>img:</label>
	<input type="file" name="img" class="form-control">
	<input type="submit" name="submit" value="Add" class="btn btn-info">
	


</form>