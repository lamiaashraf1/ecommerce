<form class="form-group" action="database/add_user.php" method="post" enctype="multipart/form-data">
	<label>Username:</label>

	<input type="text" name="username" class="form-control"><br>
	<label>Password:</label>
	<input type="password" name="password" class="form-control">
	<label>FirstName:</label>
	<input type="text" name="firstname" class="form-control">
	<label>LastName:</label>
	<input type="text" name="lastname" class="form-control">
	<label>Phone:</label>
	<input type="text" name="phone" class="form-control">
	<label>Email:</label>
	<input type="email" name="email" class="form-control">
	<label>Adress:</label>
	<input type="text" name="address" class="form-control">
	<label>Age:</label>
	<input type="text" name="age" class="form-control">
	<label>Gender:</label>
	<select name="gender" class="form-control">
		<option selected=""></option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select>
	<br>
	<label>Img:</label>
	<input type="file" name="img" class="form-control">
	<input type="submit" name="submit" value="Add" class="btn btn-info">
	


</form>