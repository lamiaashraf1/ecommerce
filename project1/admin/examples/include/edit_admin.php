<?php 
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM admin WHERE id = $id";
$result = $conn->query($select);
$row = $result->fetch_assoc();

?>

<form class="form-group" action="database/edit_admin.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<label>Username:</label>

	<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>"><br>
	<label>Password:</label>
	<input type="password" name="password" class="form-control">
	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	


</form>