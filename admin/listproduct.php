
<?php
   $result = $db->getdata("product");

?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Product</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CategoryID</th>
                                                <th>Title</th>
                                                <th>New_price</th>
                                                <th>Old_price</th>
                                                <th>Qty</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                               if ($result) {
                                foreach ($result as $row) {
                                  if($row["status"] == 1){
                                    $row['status'] = "Active";
                                  }
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['category_id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['new_price'] . "</td>";
                                        echo "<td>" . $row['old_price'] . "</td>";
                                        echo "<td>" . $row['qty'] . "</td>";
                                        echo "<td style='width:80px'>
                                        <img src='./upload/" . $row['image'] . "' width='70px' height='70px'>
                                      </td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td><a href='index.php?p=category&id=" . $row['id'] . "' class='btn btn-success'>Edit</a> 
                                        <a href='index.php?p=listcategory&id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5' class='text-center'>No products found</td></tr>";
                                }
                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
   
                  
            </div>
            </div>
            </div>
