

<?php 
session_start();
if(isset($_SESSION['username'])){



?>

<?php include"des/header.php"?>
<?php include "des/nav.php"?>
<?php include "des/sidebar.php"?>


 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
             


                <?php

                if(!$_GET['do'])
                { include 'include/product_view.php'; }
                elseif($_GET['do']=="add"){
                include 'include/add_product.php';
                 }
                elseif ($_GET['do']=="edit") {
                include 'include/edit_product.php';
  
                    }
                   ?>

            </div>
          </div>
        </div>
      </div>
        <?php include 'des/footer.php';
  }else{
    header("Location:login.php");
  }