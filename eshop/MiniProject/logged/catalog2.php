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
            <div class="row mt-1">
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy Z Fold 3  </h5>
                        <img src="../pics/samsunggalaxyzfold3.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 7</h6>
                        <h6>Quantity: 29</h6>
                        <h6>Screensize: 7.6 inches</h6>
                        <h6>CPU: Qualcomm SM8350 Snapdragon 888 5G (5 nm)</h6>
                        <h6>RAM: 12GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 4400mAh</h6>
                        <h6>SAR: 0.73 W/kg (head)     1.22 W/kg (body)</h6>
                        <h6>Price: 1,499€</h6>

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
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy Z Flip 3 </h5>
                        <img src="../pics/samsunggalaxyzflip3.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 8</h6>
                        <h6>Quantity: 13</h6>
                        <h6>Screensize: 6.7 inches</h6>
                        <h6>CPU: Qualcomm SM8350 Snapdragon 888 5G (5 nm)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 3300mAh</h6>
                        <h6>SAR: 0.86 W/kg (head)     1.58 W/kg (body)</h6>
                        <h6>Price: 858€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy S 21</h5>
                        <img src="../pics/samsunggalaxys21.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 9</h6>
                        <h6>Quantity: 37</h6>
                        <h6>Screensize: 6.2 inches</h6>
                        <h6>CPU: Exynos 2100 (5 nm)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 64MP</h6>
                        <h6>Battery: 4000mAh</h6>
                        <h6>SAR: 0.74 W/kg (head)     1.08 W/kg (body)</h6>
                        <h6>Price: 695€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy S 21 Ultra </h5>
                        <img src="../pics/samsunggalaxys21ultra.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 10</h6>
                        <h6>Quantity: 13</h6>
                        <h6>Screensize: 6.8 inches</h6>
                        <h6>CPU: Exynos 2100 (5 nm)</h6>
                        <h6>RAM: 12/16GB</h6>
                        <h6>Camera: 108MP</h6>
                        <h6>Battery: 5000mAh</h6>
                        <h6>SAR: 0.77 W/kg (head)     1.02 W/kg (body)</h6>
                        <h6>Price: 	995€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy S 21+ </h5>
                        <img src="../pics/samsunggalaxys21plus.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 11</h6>
                        <h6>Quantity: 37</h6>
                        <h6>Screensize: 6.7 inches</h6>
                        <h6>CPU: Exynos 2100 (5 nm)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 64MP</h6>
                        <h6>Battery: 4800mAh</h6>
                        <h6>SAR: 0.65 W/kg (head)     0.95 W/kg (body)</h6>
                        <h6>Price: 799€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Samsung Galaxy S 20 Ultra </h5>
                        <img src="../pics/samsungs20ulta.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 12</h6>
                        <h6>Quantity: 8</h6>
                        <h6>Screensize: 6.9 inches</h6>
                        <h6>CPU: Exynos 990 (7 nm+)</h6>
                        <h6>RAM: 12/16GB</h6>
                        <h6>Camera: 108MP</h6>
                        <h6>Battery: 5000mAh</h6>
                        <h6>SAR: 0.94 W/kg (head)     0.95 W/kg (body)</h6>
                        <h6>Price: 899€</h6>

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
                    <li class="page-item"><a class="page-link" href="catalog.php" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="catalog4.php">4</a></li>
                    <li class="page-item"><a class="page-link" href="catalog3.php" aria-label="Next"><span aria-hidden="true">»</span></a></li>
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