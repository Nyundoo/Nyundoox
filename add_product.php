<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php";

  if (isset($_POST['submit'])) {

    $product = $_POST['product'];

    $price = $_POST['price'];

    $amount = $_POST['amount'];

    $item_description = $_POST['item_description'];

    $sql = "INSERT INTO `product`(`product`, `price`, `amount`, `item_description`) VALUES ('$product','$price','$amount','$item_description')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Input Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Input Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">           
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" style="background-color: #D4B37F
;" id="exampleInputName1" placeholder="Product Name" name="product">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Price</label>
                        <input type="number" class="form-control" style="background-color: #D4B37F
;" id="exampleInputCity1" placeholder="00.00" name="price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Amount</label>
                        <input type="number" class="form-control" style="background-color: #D4B37F
;" id="exampleInputCity1" placeholder="00" name="amount">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Item Discription</label>
                        <textarea class="form-control" style="background-color: #D4B37F
;" id="exampleTextarea1" rows="4" name="item_description"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>          
              
            </div>
          </div>
          
<?php
        include './template/footer.php';
        ?>