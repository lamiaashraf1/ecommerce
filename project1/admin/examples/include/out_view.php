				
<?php
include "database/connection.php";
$select = "SELECT * FROM cart WHERE sent='1' GROUP BY id_user";
$result = $conn->query($select);
foreach ($result as $key) {
  $id_user = $key['id_user'];
  $select_user = "SELECT * FROM user WHERE id = '$id_user' ";

$result_user = $conn->query($select_user);
$result_user2= $result_user -> fetch_assoc();
  
?>



        <table class="table">
  <thead>
    <tr>
      
       <th scope="col">Username</th>     
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Control</th>

    </tr>
  </thead>
 


       <tr>
      <td><?php echo $result_user2['username'] ;?></td>
            <td><?php echo $result_user2['firstname'] ;?></td>
            <td><?php echo $result_user2['lastname'] ;?></td>
            <td><?php echo $result_user2['phone'] ;?></td>
             <td><?php echo $result_user2['address'] ;?></td>
            <td><?php echo $result_user2['email'] ;?></td>
         
    </tr>
     <tbody>

<?php
include 'database/connection.php';
 $id_user = $key['id_user'];
$select_user1 = "SELECT * FROM cart WHERE id_user = '$id_user'";
$result_user1 = $conn->query($select_user1);

	

 ?> 
 <thead>
   <tr>
      
      <th scope="col">Name</th>     
      <th scope="col">Price</th>     
           
      <th scope="col">Category</th> 
      <th scope="col">Sale</th>    
      
      
      <th scope="col">Control</th>
    </tr>
  </thead>

<?php
foreach ($result_user1 as $key1) {

$id_product = $key1['id_product'];
$select_pro = "SELECT * FROM product WHERE id = $id_product";
$result_pro = $conn->query($select_pro);
$result_pro2= $result_pro -> fetch_assoc(); 

?>

	
   <tr>    
      <td><?php echo $result_pro2['name'] ;?></td>
      <td><?php echo $result_pro2['price'] ;?></td>
      <td><?php echo $result_pro2['category'] ;?></td>
      <td><?php echo $result_pro2['sale'] ;?></td>
      
    
      

        



        </td>
    </tr>
  
<?php } ?>
   
  </tbody>
</table>
<?php } ?>