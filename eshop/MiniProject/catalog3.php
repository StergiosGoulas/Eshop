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
        <a href="my_orders.html">My orders</a>
        <a href="contact.html">Contact</a>
        <a href="register.php" style="margin-left:auto;">Register</a>
        <a href="login.php">Login</a>
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
                        <h5 class="mt-2"> Xiaomi Poco X3 Pro  </h5>
                        <img src="pics/xiaomipocox3pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 13</h6>
                        <h6>Quantity: 34</h6>
                        <h6>Screensize: 6.67 inches</h6>
                        <h6>CPU: Qualcomm Snapdragon 860 (7 nm)</h6>
                        <h6>RAM: 6/8GB</h6>
                        <h6>Camera: 48MP</h6>
                        <h6>Battery: 5160mAh</h6>
                        <h6>SAR: 0.99 W/kg (head)     0.67 W/kg (body)</h6>
                        <h6>Price: 199€ </h6>

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
                        <h5 class="mt-2"> Xiaomi Poco F3</h5>
                        <img src="pics/xiaomipocof3.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 14</h6>
                        <h6>Quantity: 38</h6>
                        <h6>Screensize: 6.67 inches </h6>
                        <h6>CPU: Qualcomm SM8250-AC Snapdragon 870 5G (7 nm)</h6>
                        <h6>RAM: 6/8GB</h6>
                        <h6>Camera: 48MP</h6>
                        <h6>Battery: 4520mAh</h6>
                        <h6>SAR: 1.06 W/kg (head)     0.72 W/kg (body)</h6>
                        <h6>Price: 305€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Xiaomi Redmi Note 9 Pro  </h5>
                        <img src="pics/xiaomiredminote9pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 15</h6>
                        <h6>Quantity: 32</h6>
                        <h6>Screensize: 6.67 inches </h6>
                        <h6>CPU: Qualcomm SM7125 Snapdragon 720G (8 nm)</h6>
                        <h6>RAM: 6/8GB</h6>
                        <h6>Camera: 64MP</h6>
                        <h6>Battery: 5020mAh</h6>
                        <h6>SAR: 0.87 W/kg (head)     0.71 W/kg (body)</h6>
                        <h6>Price: 205€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Xiaomi Mi 11 Lite</h5>
                        <img src="pics/xiaomi11lite.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 16</h6>
                        <h6>Quantity: 50</h6>
                        <h6>Screensize: 6.55 inches</h6>
                        <h6>CPU: Qualcomm SM7150 Snapdragon 732G (8 nm)</h6>
                        <h6>RAM: 4/8GB</h6>
                        <h6>Camera: 64MP</h6>
                        <h6>Battery: 4250mAh</h6>
                        <h6>SAR: 1.07 W/kg (head)     0.82 W/kg (body)</h6>
                        <h6>Price: 259€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Xiaomi 11T  </h5>
                        <img src="pics/xiaomi11t.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 17</h6>
                        <h6>Quantity: 36</h6>
                        <h6>Screensize: 6.67 inches</h6>
                        <h6>CPU: MediaTek MT6893 Dimensity 1200 5G (6 nm)</h6>
                        <h6>RAM: 8GB</h6>
                        <h6>Camera: 108MP</h6>
                        <h6>Battery: 5000mAh</h6>
                        <h6>SAR: 1.09 W/kg (head)     0.83 W/kg (body)</h6>
                        <h6>Price: 419€ </h6>

                        <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="p-card bg-white p-2 rounded px-3">
                        <h5 class="mt-2"> Xiaomi Redmi Note 10 Pro  </h5>
                        <img src="pics/xiaomiredminote10pro.jpeg" alt="" width="200px" height="285px">
                        <h6>ProductID: 18</h6>
                        <h6>Quantity: 20</h6>
                        <h6>Screensize: 6.67 inches</h6>
                        <h6>CPU: Qualcomm SM7150 Snapdragon 732G (8 nm)</h6>
                        <h6>RAM: 6/8GB </h6>
                        <h6>Camera: 108MP</h6>
                        <h6>Battery: 5020mAh</h6>
                        <h6>SAR: 1.09 W/kg (head)     1.06 W/kg (body)</h6>
                        <h6>Price: 279€</h6>

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
                    <li class="page-item"><a class="page-link" href="catalog2.php" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="catalog4.php">4</a></li>
                    <li class="page-item"><a class="page-link" href="catalog4.php" aria-label="Next"><span aria-hidden="true">»</span></a></li>
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