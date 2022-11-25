<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone_number = $_POST['phone_number'];

    $target = $_POST['target'];


    $sql = "INSERT INTO `distributors`(`name`, `email`, `phone_number`, `target`) VALUES ('$name','$email','$phone_number', '$target')";

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
              <h3 class="page-title"> Distributor Input Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Distributor Input Form</li>
                </ol>
              </nav>
            </div>
            <div class="row">           
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" style="background-color: #D4B37F
;" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" style="background-color: #D4B37F
;" id="exampleInputEmail3" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Phone Number</label>
                        <input type="number" class="form-control" style="background-color: #D4B37F
;" id="exampleInputCity1" placeholder="+254710000000" name="phone_number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Target</label>
                        <input type="number" class="form-control" style="background-color: #D4B37F
;" id="exampleInputCity1" placeholder="10" name="target">
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