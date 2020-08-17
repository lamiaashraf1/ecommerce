				<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>           
      <th scope="col">Seen</th> 
    
      
      <th scope="col">Email</th>
    
      <th scope="col">Phone</th>
      <th scope="col">Control</th>

    </tr>
  </thead>
  <tbody>

<?php
include 'database/connection.php';
$select_mes = "SELECT * FROM message";
$result_mes = $conn->query($select_mes);
while($row = $result_mes->fetch_assoc()) {
	

 ?>  	
    <tr>    
      <td><?php echo $row['name'] ;?></td>
 <td class="see"><?php if ($row['seen']=='0') {echo "unseen";
 } else{echo "seen";} ?></td>

      
      <td><?php echo $row['email'] ;?></td>
      <td><?php echo $row['phone'] ;?></td>
      
      
        <!-- Button trigger modal -->
<button type="button" data="<?php echo $row['id'];?>" class="btn btn-info view" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">
  View Message
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
         </div>
  </div>
</div>
      	



        </td>
    </tr>
<?php } ?>
   
  </tbody>
</table>