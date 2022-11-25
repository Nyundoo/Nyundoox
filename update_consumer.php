<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';


include "./config.php";

    if (isset($_POST['update'])) {

      $distributor_id =  $_GET['id'];

        $name = $_POST['name'];

        $email = $_POST['email'];

        $phone_number = $_POST['phone_number'];

        $sql = "UPDATE `consumer` SET `name`='$name',`email`='$email',`phone_number`='$phone_number' WHERE `id`='$distributor_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

if (isset($_GET['id'])) {

    $distributor_id = $_GET['id']; 

    $sql = "SELECT * FROM `consumer` WHERE `id`='$distributor_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $email = $row['email'];

            $phone_number = $row['phone_number'];

            $id = $row['id'];

        } 

    ?>

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Consumer Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Consumer Form</li>
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
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name="name" value="<?php echo $name; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Email</label>
                        <input type="email" class="form-control" id="exampleInputCity1" name="email" value="<?php echo $email; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputCity1" name="phone_number" value="<?php echo $phone_number; ?>">
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

        header('Location: list_consumer.php');

    } 

}

?> 
          
<?php
        include './template/footer.php';
        ?>