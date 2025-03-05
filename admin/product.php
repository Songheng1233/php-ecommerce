<?php
   $resultcategory = $db->getdata("categary");
   
   if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $new_price = $_POST['new_price'];
      $old_price = $_POST['old_price'];
      $category = $_POST['Category'];  // Fixed variable name here
      $qty = $_POST['qty'];
      $status = $_POST['status'];
      
      // Handling file upload
      $image = $_FILES['image']['name'];
      $folder = "./upload/";
      $file = $folder . basename($image);
      
      // Check if file is uploaded and move it
      if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
         move_uploaded_file($_FILES['image']['tmp_name'], $file);
      } else {
         // Handle error if file upload fails
         echo "Error uploading file.";
         exit;
      }

      // Data to be inserted
      $data = [
        "title" => $title,
        "category_id" => $category,  // Fixed variable name here
        "new_price" => $new_price,
        "old_price" => $old_price,
        "qty" => $qty,
        "image" => $image,
        "status" => $status,
      ];

      // Inserting data into the database
      $result = $db->insertdata("product", $data);
   }
?>

<div class="main-panel">
   <div class="content-wrapper">
      <div class="row" id="proBanner">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title text-center">Add Product</h4>
               </div>
               <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="productName" class="text-dark">Title</label>
                        <input type="text" class="form-control" id="producttitle" name="title" required/>
                     </div>
                     <div class="form-group">
                        <label for="category" class="text-dark d-flex">Category</label>
                        <select name="Category" class="form-control" required>
                           <option value="0">Select Category</option>
                           <?php
                              foreach($resultcategory as $row){
                                 echo "<option value='".$row['id']."'>".$row['name']."</option>";
                              }
                           ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="newPrice" class="text-dark">New Price</label>
                        <input type="text" class="form-control" name="new_price" required/>
                     </div>
                     <div class="form-group">
                        <label for="oldPrice" class="text-dark">Old Price</label>
                        <input type="text" class="form-control" name="old_price" required/>
                     </div>
                     <div class="form-group">
                        <label for="qty" class="text-dark">Quantity</label>
                        <input type="number" class="form-control" name="qty" required/>
                     </div>
                     <div class="form-group">
                        <label for="status" class="text-dark">Status</label>
                        <select name="status" class="form-control" required>
                           <option value="0">Select Status</option>
                           <option value="1">Active</option>
                           <option value="0">Inactive</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="image" class="text-dark">Image</label>
                        <input type="file" class="form-control" name="image" required/>
                     </div>
                     <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
