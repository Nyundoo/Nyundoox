<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php";

$sql = "SELECT purchase.id,
              product.product,
              distributors.name,
              consumer.name As con,
              purchase.quatity,
              purchase.purchased_date
              FROM purchase
              JOIN product ON product.id = purchase.product
              JOIN distributors ON distributors.id = purchase.distributor
              JOIN consumer ON consumer.id = purchase.consumer
              ORDER BY purchase.id";

$result = $conn->query($sql);
?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Purchase List Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Purchase List Table</li>
                </ol>
              </nav>
            </div>
            <div class="row">             
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Product </th>
                            <th> Distributor </th>
                            <th> Cunsumer </th>
                            <th> Quantity </th>
                            <th> Purchased Date </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                              if ($result->num_rows > 0) {

                                  while ($row = $result->fetch_assoc()) {

                              ?> 
                          <tr class="table-info">
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['product']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['con']; ?> </td>
                            <td> <?php echo $row['quatity']; ?> </td>
                            <td> <?php echo $row['purchased_date']; ?> </td>
                            <td><a class="btn btn-danger" href="delete_purchase.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn btn-info" href="update_purchase.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                          </tr>  
                          <?php       }

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


          <?php
        include './template/footer.php';
        ?>