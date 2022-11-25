<?php 
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php"; 

if (isset($_GET['id'])) {

    $distributor_id = $_GET['id'];

    $sql = "DELETE FROM `distributors` WHERE `id`='$distributor_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

        include './template/footer.php';
?>