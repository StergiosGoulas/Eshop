<?php
require_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Login Form with Blue Background</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mystyle.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

</head>
<style>
	h5 {
		color:red;
		margin-left:500px;
	}
</style>
<body>
	<?php 
		if(isset($_POST["create"])) { //create = button name line 93
			
			$stmt = $pdo->prepare("SELECT * FROM client WHERE email = ?");
			$stmt->execute([$_POST["email"]]);
			$user = $stmt->fetch();

			if ($user && password_verify($_POST["password"], $user["password"]))
			{
				$_SESSION["logged"] = true;
				header( "Location: logged/index.html" );
				exit;
			} 
			else {
				$_SESSION["error"] = "Wrong Email Or Password.Try again"; 
				header( "Location: login.php");
				exit;
			}
		}
	?>
	<div id="error" style="color:red"></div>

    <!-- navigation bar -->

	<div class="nav">
		<img src="pics/mobile_phone.png" alt="" height="50px" width="50px">
        <a class="active" href="index.html">Home</a>
        <a href="catalog.php">Mobile phones</a>
        <a href="myOrders.php">My orders</a>
        <a href="contact.html">Contact</a>
        <a href="register.php" style="margin-left:auto;">Register</a>
    </div>
	<h5>
		<?php	
			if (isset($_SESSION['error'])){
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}
		?>
	</h5>
	<div class="signup-form">
	<form method="POST" action="login.php">
			<h2>Login</h2>
			<hr>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email" required="required" style="border: 1px solid black;">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="pwd" name="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" 
				title="Must contain at least one number and one uppercase and lowercase letter and one special character, and at least 8 or more characters" required>
			</div>     
			<div class="form-group">
				<button type="submit" name="create" class="btn btn-primary btn-lg">Login</button>
			</div>
		</form>
		<div class="hint-text" style="color:#3598dc">Dont have an account? <a href="register.php" style="color: #3598dc;">Sign up here</a></div>
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