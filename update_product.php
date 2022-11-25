<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';


include "./config.php";

    if (isset($_POST['update'])) {

      $product_id =  $_GET['id'];

        $product = $_POST['product'];

        $price = $_POST['price'];

        $amount = $_POST['amount'];

        $item_description = $_POST['item_description'];

        $sql = "UPDATE `product` SET `product`='$product',`price`='$price',`amount`='$amount',`item_description`='$item_description' WHERE `id`='$product_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

if (isset($_GET['id'])) {

    $product_id = $_GET['id']; 

    $sql = "SELECT * FROM `product` WHERE `id`='$product_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $product = $row['product'];

            $price = $row['price'];

            $amount = $row['amount'];

            $item_description  = $row['item_description'];

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
                        <input type="text" class="form-control" id="exampleInputName1"  name="product" value="<?php echo $product; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Price</label>
                        <input type="number" class="form-control" id="exampleInputCity1" name="price" value="<?php echo $price; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputCity1" name="amount" value="<?php echo $amount; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Item Discription</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="item_description"><?php echo $item_description; ?></textarea>
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