<?php

   if(isset($_POST['submit'])){
      $name = $_POST['categoryname'];
      $status = $_POST['status'];

      $data=[
        "name" => $name,
        "status" => $status
      ];

      $result = $db->insertdata("categaryname", $data);
   }



?>


<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title text-center">Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="productName" class="text-dark">Name</label>
                                <input type="text" class="form-control" id="productName" name="categoryname"/>
                            </div>
                            <div class="form-group">
                                <label for="categorySlug" class="text-dark d-flex">Status</label>
                                <select name="status" >
                                    <option value="0">Select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">UnActive</option>

                                </select>
                            </div>
                            <input type="submit"  name="submit" value="Add category" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
