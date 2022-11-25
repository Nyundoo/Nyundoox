<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php";

$sql = "SELECT * FROM consumer";

$result = $conn->query($sql);
?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Consumer List Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Consumer List Table</li>
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
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>
                          <tr class="table-info">
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['phone_number']; ?> </td>
                            <td><a class="btn btn-danger" href="delete_distributor.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn btn-info" href="update_distributor.php?id=<?php echo $row['id']; ?>">Edit</a></td>
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