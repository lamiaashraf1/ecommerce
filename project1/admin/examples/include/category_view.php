<a href="?do=add"><button class="btn btn-primary">Add category</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Control</th>

  
    </tr>
  </thead>
  <tbody>
    <?php
include 'database/connection.php';

$select_category = "SELECT * FROM category";
$result_category = $conn ->query($select_category);
while ($row = $result_category->fetch_assoc()) {


    ?>
    <tr>
      <td><?php echo $row['name'] ;?></td>
      <td><a href="?do=edit&id=<?php echo $row['id']; ?>"><button class="bt btn-primary"></button>Edit</a>
   
   <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $row['id'] ?>"> Delete </button>

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
        Are YOU Sure Delete <span style="color: red;"><?php echo $row['username'];?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <a href="database/delete_category.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
        



        </td>
    </tr>
<?php } ?>
  </tbody>
</table>