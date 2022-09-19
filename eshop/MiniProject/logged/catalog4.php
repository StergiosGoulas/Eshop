<?php
require_once("../config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Form</title>
</head>
<body>
   <!-- navigation bar -->

   <div class="nav">
        <img src="../pics/mobile_phone.png" alt="" height="50px" width="50px">
        <a class="active" href="index.html">Home</a>
        <a href="catalog.php">Mobile phones</a>
        <a href="myOrders.php">My orders</a>
        <a href="contact.html">Contact</a>
        <a href="logout.php" style="margin-left: auto;">Logout</a>
    </div>


        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-row justify-content-between align-items-center filters">
                    <h2>Mobile Phones</h2>
                    </div>
                </div>
            </div>
        <form method="POST" action="catalog.php">
            <div class="row mt-1" id="ra">
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei Nova 9  </h5>
                        <img src="../pics/huaweinova9.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 19</h6>
                        <h6>Quantity: 8</h6>
                        <h6>Screensize: 6.57 inches</h6>
                        <h6>CPU: Qualcomm SM7325 Snapdragon 778G 4G (6 nm)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 50MP</h6>
                        <h6>Battery: 4300mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.67 W/kg (body)</h6>
                        <h6>Price: 389€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei P40 Pro</h5>
                        <img src="../pics/huaweip40pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 20</h6>
                        <h6>Quantity: 12</h6>
                        <h6>Screensize: 6.58 inches </h6>
                        <h6>CPU: Kirin 990 5G (7 nm+)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 50MP</h6>
                        <h6>Battery: 4200mAh</h6>
                        <h6>SAR: 1.06 W/kg (head)     0.72 W/kg (body)</h6>
                        <h6>Price: 729€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei P40 Lite  </h5>
                        <img src="../pics/huaweip40lite.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 21</h6>
                        <h6>Quantity: 46</h6>
                        <h6>Screensize: 6.4 inches </h6>
                        <h6>CPU: Kirin 810 (7 nm)</h6>
                        <h6>RAM: 6GB</h6>
                        <h6>Camera: 48MP</h6>
                        <h6>Battery: 4200mAh</h6>
                        <h6>SAR: 0.87 W/kg (head)     0.71 W/kg (body)</h6>
                        <h6>Price: 246€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei P30 Dual</h5>
                        <img src="../pics/huaweip30.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 22</h6>
                        <h6>Quantity: 50</h6>
                        <h6>Screensize: 6.1 inches</h6>
                        <h6>CPU: Kirin 980 (7 nm)</h6>
                        <h6>RAM: 4/8GB</h6>
                        <h6>Camera: 40MP</h6>
                        <h6>Battery: 3650mAh</h6>
                        <h6>SAR: 1.07 W/kg (head)     0.82 W/kg (body)</h6>
                        <h6>Price: 589€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei P30 Pro  </h5>
                        <img src="../pics/huaweip30pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 23</h6>
                        <h6>Quantity: 26</h6>
                        <h6>Screensize: 6.47 inches</h6>
                        <h6>CPU: Kirin 980 (7 nm)</h6>
                        <h6>RAM: 6/8GB</h6>
                        <h6>Camera: 40MP</h6>
                        <h6>Battery: 4200mAh</h6>
                        <h6>SAR: 1.09 W/kg (head)     0.83 W/kg (body)</h6>
                        <h6>Price: 744€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Huawei P Smart Z  </h5>
                        <img src="../pics/huaweipsmartz.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 24</h6>
                        <h6>Quantity: 4</h6>
                        <h6>Screensize: 6.59 inches</h6>
                        <h6>CPU: Kirin 710F (12 nm)</h6>
                        <h6>RAM: 4GB </h6>
                        <h6>Camera: 16MP</h6>
                        <h6>Battery: 4000mAh</h6>
                        <h6>SAR: 1.09 W/kg (head)     1.06 W/kg (body)</h6>
                        <h6>Price: 280€</h6>

                            <?php 
                                if(isset($_POST["test"])) {
                                    if(isset($_SESSION["logged"])) {
                                        header("Location: myOrders.php");
                                        exit;
                                    }
                                    else {
                                        header('Location: login.php');
                                        exit;
                                    }
                                }
                            ?>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
        <div class="d-flex justify-content-end text-right mt-2">
            <nav>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="catalog3.php" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="catalog4.php">4</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>

        <!-- footer -->

        <footer class="page-footer ">
        <div class="container ">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <h6 class="text-uppercase font-weight-bold ">Contact</h6>
                <p><br />Email: mymobile@info.com
                    <br />Τηλέφωνο: 2810-002211
                </p>
            </div>
        </div>
    </footer>

</body>
</html>