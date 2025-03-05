
<?php
   $result = $db->getdatabyid("categary", "status",1);

?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">ListCategoty</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
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
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
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
