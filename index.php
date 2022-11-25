<?php
include './template/header.php';
include './template/sidebar.php';
include './template/menu.php';

include "./config.php";

// Distributors
$sql = "SELECT purchase.id,
            distributors.name,
            product.product,
            product.price,              
            SUM(purchase.quatity) As total_qty,
            distributors.target,
            SUM(product.price * purchase.quatity) As total_sale,
            SUM(product.price * purchase.quatity * 0.03) As rebate
            FROM purchase
            JOIN product ON product.id = purchase.product
            JOIN distributors ON distributors.id = purchase.distributor
            JOIN consumer ON consumer.id = purchase.consumer
            WHERE distributors.target >= 10 
            GROUP BY distributors.id";

$result = $conn->query($sql);


//Consumer
$sql = "SELECT purchase.id,
                consumer.name,
                product.product,
                product.price,              
                SUM(purchase.quatity) As total_qty,
                SUM(product.price * purchase.quatity) As total_sale,
                SUM(product.price * purchase.quatity * 0.01) As one_percent_sale,
                SUM((product.price * purchase.quatity * 0.01)/0.5) As points
                FROM purchase
                JOIN product ON product.id = purchase.product
                JOIN distributors ON distributors.id = purchase.distributor
                JOIN consumer ON consumer.id = purchase.consumer
                GROUP BY consumer.id";

$results2 = $conn->query($sql);

//Total distributors
$sql = "SELECT COUNT(name) AS total_distributors
FROM distributors";

$results3 = $conn->query($sql);


//Total distributors
$sql = "SELECT COUNT(name) AS total_consumers
FROM consumer";

$results4 = $conn->query($sql);

//Total distributors
$sql = "SELECT COUNT(product) AS total_products
FROM product";

$results5 = $conn->query($sql);


//Total sales
$sql = "SELECT               
SUM(purchase.quatity * product.price) As total_sales
FROM purchase
JOIN product ON product.id = purchase.product";

$results6 = $conn->query($sql);
?>



<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                            <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid"
                                alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                            <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique
                                layouts!</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                            <span>
                                <a href="#" target="_blank"
                                    class="btn btn-outline-light btn-rounded get-started-btn">Nyundoo</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0"><?php foreach($results3 as $row) {
    echo $row['total_distributors'];
} ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Distributors</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0"><?php foreach($results4 as $row) {
    echo $row['total_consumers'];
} ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Consumers</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0"><?php foreach($results5 as $row) {
    echo $row['total_products'];
} ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Products</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Ksh<?php foreach($results6 as $row) {
    echo $row['total_sales'];
} ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Sales</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Distributors Rebate</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Distributor Name </th>
                                    <th> Product </th>
                                    <th> Price </th>
                                    <th> Total Quantity </th>
                                    <th> Target (>=10) </th>
                                    <th> Total Sale </th>
                                    <th> Rebate </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['product']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['total_qty']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['target']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['total_sale']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rebate']; ?>
                                    </td>
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
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Consumer Points</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Consumer Name </th>
                                    <th> Product </th>
                                    <th> Price </th>
                                    <th> Total Quantity </th>
                                    <th> Total Sale </th>
                                    <th> 1% Sale </th>
                                    <th> Points </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

if ($results2->num_rows > 0) {

    while ($row = $results2->fetch_assoc()) {

?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['product']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['total_qty']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['total_sale']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['one_percent_sale']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['points']; ?>
                                    </td>
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
   


    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Portfolio Slide</h4>
                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                    id="owl-carousel-basic">
                    <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/images/dashboard/Img_5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/images/dashboard/img_6.jpg" alt="">
                    </div>
                </div>
                <div class="d-flex py-4">
                    <div class="preview-list w-100">
                        <div class="preview-item p-0">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">CeeCee Bass</h6>
                                        <p class="text-muted text-small">4 Hours Ago</p>
                                    </div>
                                    <p class="text-muted">Well, it seems to be working now.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-muted">Well, it seems to be working now. </p>
                <div class="progress progress-md portfolio-progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<?php
        include './template/footer.php';
        ?>