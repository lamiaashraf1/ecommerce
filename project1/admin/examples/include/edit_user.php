<?php 
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM user WHERE id = $id ";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>



<form class="form-group" action="database/edit_user.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label>Username:</label>

	<input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control"><br>
	<label>Password:</label>
	<input type="text" name="password" class="form-control">
	<label>FirstName:</label>
	<input type="text" name="firstname"value="<?php echo $row['firstname'] ?>"  class="form-control">
	<label>LastName:</label>
	<input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" class="form-control">
	<label>Phone:</label>
	<input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control">
	<label>Email:</label>
	<input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
	<label>Adress:</label>
	<input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control">
	<label>Age:</label>
	<input type="text" name="age" value="<?php echo $row['age'] ?>" class="form-control">
	<label>Img:</label>
	<img style="width: 50px;height: 50px;" src="database/upload/<?php echo $row['img']; ?>">
	<input type="file" name="img" class="form-control">
	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	


</form>