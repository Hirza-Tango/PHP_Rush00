<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>
<body>
	<div id="head" style="display:inline; width: 100%">
		<img src="/img/Screen Shot 2018-10-06 at 23.15.37.png" height="70" width="250">
		<div id="right" style="float:right;display:inline">
			<?php
			session_start();
			if ($_SESSION['username']) {
				echo "<h3>Welcome, ", $_SESSION['full_name'], "</h3>";
				echo '<a href="logout.php">Logout</a>';
			} else {
				echo '<a href="signup.html">Sign Up</a><a href="login.html">Login</a>';
			}
			?>
			<a href="cart.html"><img src= "/img/cart-icon-14 (1).png" height="40" style="float:right"></a>
		</div>
	</div>
	<div id = "page">
		<table>
			<tr>
				<td><p id = "pname">Name :</p><img src = "/img/818tfvtAGLL._SL1500_.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/style-mens-formal-trouser-500x500.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="2"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/shirt.jpeg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="3"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/iphones8-plus-x.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="4"></form></td>
			</tr>
			<tr>
				<td><p id = "pname">Name :</p><img src = "/img/free-ny-white-caps-0111-friendskart-original-imaf2zdxxcgn2sph.jpeg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/Reeva-Fashion-Jewellery-Golden-Necklace-SDL947515141-1-647cf.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/klein-tools-electricians-tool-sets-mpz00050r-64_1000.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/818tfvtAGLL._SL1500_.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
			</tr>
			<tr>
				<td><p id = "pname">Name :</p><img src = "/img/51s7SMOXbSL.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/818tfvtAGLL._SL1500_.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/818tfvtAGLL._SL1500_.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
				<td><p id = "pname">Name :</p><img src = "/img/818tfvtAGLL._SL1500_.jpg" height="450" width= "450"><p id = "pprice">Price : R100 </p><form action="addtocart.php" method="post"><input type="button" value="AddtoCart" name="1"></form></td>
			</tr>
		</table>
	</div>
	<div id="foot">
		copyrights &copy to Dylan Slogrove & Ntsikelelo Metseeme
		<div id="right">
			buyStuff.com &copy;
		</div>
	</div>
</body>
</html>