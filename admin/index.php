<?php
    include("../include/class.php");
    $db = new Ecommerce();

    $page = "dashboard.php";
    $p= "dashboard";

    if(isset($_GET['p'])){
         $p = $_GET['p'];

         switch($p){
           case "product" : $page = "product.php";
            break;
            case "listproduct" : $page = "listproduct.php";
            break;
            case "category" : $page = "category.php";
            break;
            case "listcategory" : $page = "listcategory.php";
            break;
            case "brand" : $page = "brand.php";
            break;
            case "user" : $page = "user.php";
            break;

         }
    }



?>

<!DOCTYPE html>
<html lang="en">
   <?php include("./include/head.php") ?>
  <body>
    <div class="container-scroller">
    
      <?php include("./include/navbar.php") ?>
      
      <div class="container-fluid page-body-wrapper">
     
      <?php  include("./include/sidebar.php") ?>
       
       <?php include($page) ?>
        
      </div>
      
    </div>
  
    <?php include("./include/script.php") ?>
  </body>
</html>
