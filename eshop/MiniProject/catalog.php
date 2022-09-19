<?php
require_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Form</title>
</head>
<body>
   <!-- navigation bar -->

   <div class="nav">
        <img src="pics/mobile_phone.png" alt="" height="50px" width="50px">  
        <a class="active" href="index.html">Home</a>
        <a href="catalog.php">Mobile phones</a>
        <a href="myOrders.php">My orders</a>
        <a href="contact.html">Contact</a>
        <a href="register.php" style="margin-left:auto;">Register</a>
        <a href="login.php" >Login</a>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row justify-content-between align-items-center filters">
                    <h2 style="color: rebeccapurple;">Mobile Phones</h2>
                </div>
            </div>
        </div>
        <form method="POST" action="catalog.php">
            <div class="row mt-1">
                <div class="col-md-4" id="phone1">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Iphone 13  </h5>
                        <img src="pics/iphone13.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 1 </h6>
                        <h6>Quantity: 41</h6>
                        <h6>Screensize: 6.1 inches</h6>
                        <h6>CPU: Apple A15 Bionic (5 nm)</h6>
                        <h6>RAM: 4GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 3240mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.98 W/kg (body)</h6>
                        <h6>Price: 976€ </h6>

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
                        <h5 class="mt-2"> Iphone 13 Pro   </h5>
                        <img src="pics/iphone13pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 2</h6>
                        <h6>Quantity: 44</h6>
                        <h6>Screensize: 6.1 inches</h6>
                        <h6>CPU: Apple A15 Bionic (5 nm)</h6>
                        <h6>RAM: 6GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 3095mAh</h6>
                        <h6>SAR: 1.20 W/kg (head)     1.19 W/kg (body)</h6>
                        <h6>Price: 1,729€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Iphone 13 Pro Max  </h5>
                        <img src="pics/iphone13promax.jpeg" alt="" width="200px" height="285px">
                        <h6 name="productID">ProductID: 3 </h6>
                        <h6>Quantity: 16</h6>
                        <h6>Screensize: 6.7 inches</h6>
                        <h6>CPU: Apple A15 Bionic (5 nm)</h6>
                        <h6>RAM: 6GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 4352mAh</h6>
                        <h6>SAR: 1.18 W/kg (head)     1.20 W/kg (body)</h6>
                        <h6>Price: 1.801€</h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Iphone 12</h5>
                        <img src="pics/iphone12.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 4</h6>
                        <h6>Quantity: 50</h6>
                        <h6>Screensize: 6.1 inches</h6>
                        <h6>CPU: Apple A14 Bionic (5 nm)</h6>
                        <h6>RAM: 4GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 2815mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.99 W/kg (body)</h6>
                        <h6>Price: 764€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Iphone 12 Pro   </h5>
                        <img src="pics/iphone12pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 5</h6>
                        <h6>Quantity: 31</h6>
                        <h6>Screensize: 6.1 inches</h6>
                        <h6>CPU: Apple A14 Bionic (5 nm)</h6>
                        <h6>RAM: 6GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 2815mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.99 W/kg (body)</h6>
                        <h6>Price: 1,145€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Iphone 12 Pro Max  </h5>
                        <img src="pics/iphone12promax.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 6</h6>
                        <h6>Quantity: 27</h6>
                        <h6>Screensize: 6.7 inches</h6>
                        <h6>CPU: Apple A14 Bionic (5 nm)</h6>
                        <h6>RAM: 6GB</h6>
                        <h6>Camera: 12MP</h6>
                        <h6>Battery: 3687mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.99 W/kg (body)</h6>
                        <h6>Price: 1,225€ </h6>

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
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="catalog4.php">4</a></li>
                    <li class="page-item"><a class="page-link" href="catalog2.php" aria-label="Next"><span aria-hidden="true">»</span></a></li>
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