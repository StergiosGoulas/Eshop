<?php
require_once("../config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>Document</title>
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


    <!-- footer -->

    <footer class="page-footer " style="position: absolute; bottom: 0px; width: 100%;">
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