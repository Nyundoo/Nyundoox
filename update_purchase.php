<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';


include "./config.php";

    if (isset($_POST['update'])) {

      $purchase_id =  $_GET['id'];

        $product = $_POST['product'];

        $distributor = $_POST['distributor'];

        $consumer = $_POST['consumer'];

        $quatity = $_POST['quatity'];

        $purchased_date = $_POST['purchased_date'];

        $sql = "UPDATE `purchase` SET `product`='$product',`distributor`='$distributor',`consumer`='$consumer',`quatity`='$quatity', `purchased_date`='purchased_date' WHERE `id`='$purchase_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

if (isset($_GET['id'])) {

    $purchase_id = $_GET['id']; 

    $sql = "SELECT * FROM `purchase` WHERE `id`='$purchase_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $product = $row['product'];

            $distributor = $row['distributor'];

            $consumer = $row['consumer'];

            $quatity  = $row['quatity'];

            $purchased_date  = $row['purchased_date'];

            $id = $row['id'];

        } 

    ?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Product Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Product Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">           
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="" method="POST">
                    <fieldset>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <select name="product" id='selected_pcid' class="js-example-basic-single" style="width:100%">
            <?php 
$sql = "SELECT * FROM product";

$result = $conn->query($sql);

             while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
                        $value= $rows['id'];
                ?>
                 <option value="<?= $value?>"><?= $value= $rows['product']?></option>
                <?php } ?>
             </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Distributor</label>
                        <select name="distributor" id='selected_pcid' class="js-example-basic-single" style="width:100%">
            <?php 
$sql = "SELECT * FROM distributors";

$result2 = $conn->query($sql);

             while ($rows = $result2->fetch_array(MYSQLI_ASSOC)) {
                        $value= $rows['id'];
                ?>
                 <option value="<?= $value?>"><?= $value= $rows['name']?></option>
                <?php } ?>
             </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Consumer</label>
                        <select name="consumer" id='selected_pcid' class="js-example-basic-single" style="width:100%">
            <?php 
            $sql = "SELECT * FROM consumer";

            $result3 = $conn->query($sql);

             while ($rows = $result3->fetch_array(MYSQLI_ASSOC)) {
                        $value= $rows['id'];
                ?>
                 <option value="<?= $value?>"><?= $value= $rows['name']?></option>
                <?php } ?>
             </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Quantity</label>
                        <input type="number" class="form-control" id="exampleInputCity1" name="quatity" value="<?php echo $quatity; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Purchased Date</label>
                        <input type="date" class="form-control" id="exampleInputCity1" name="purchased_date" value="<?php echo $purchased_date; ?>">
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="update">Update</button>
                      <button class="btn btn-dark">Cancel</button>
      </fieldset>
                    </form>
                  </div>
                </div>
              </div>          
              
            </div>
          </div>
          <?php

    } else{ 

        header('Location: list_product.php');

    } 

}

?> 
          
<?php
        include './template/footer.php';
        ?>