<a href="?do=add"><button class="btn btn-primary">Add product</button></a>
				<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>     
      <th scope="col">Price</th>     
           
      <th scope="col">Category</th> 
      <th scope="col">Sale</th>    
      
      <th scope="col">IMG</th>
      <th scope="col">Discription</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'database/connection.php';
$select_admin = "SELECT * FROM product";
$result_admin = $conn->query($select_admin);
while($row = $result_admin->fetch_assoc()) {
	

 ?>  	
    <tr>    
      <td><?php echo $row['name'] ;?></td>
      <td><?php echo $row['price'] ;?></td>
      <td><?php echo $row['category'] ;?></td>
      <td><?php echo $row['sale'] ;?></td>
      <td><img style="width: 50px;height: 50px" src="database/upload/<?php echo $row['img'] ?>"></td>
      <td><?php echo $row['discription'] ;?></td>
      
      <td><a href="?do=edit&id=<?php echo $row['id'] ;?>"><button class="btn btn-primary">Edit</button></a>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are YOU Sure Delete <span style="color: red;"><?php echo $row['name'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <a href="database/delete_product.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
      	



        </td>
    </tr>
<?php } ?>
   
  </tbody>
</table>