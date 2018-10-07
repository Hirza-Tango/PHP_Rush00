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
    <div id="head">
        <img src="/img/Screen Shot 2018-10-06 at 23.15.37.png" height="70" width="250">
        <div id = "catag">
           
                    <a href="energy_drinks.php">Energy Drinks</a>
                    <a href="sweets.php">Sweets</a></td>
                    <a href="soft_drinks.php">Cold drinks</a>
                    <a href="chocolate.php">Chocolates</a>
                    <a href="chips.php">Chips</a>
        </div>
        <div id="right">
            <?php
            session_start();
            if ($_SESSION['username']) {
                echo "<h3>Welcome, ", $_SESSION['full_name'], "</h3>";
                echo '<a href="logout.php">Logout</a>';
            } else {
                echo '<a href="signup.html">Sign Up</a><a href="login.html">Login</a>';
            }
            ?>
        <a href="cart.php"><img  src= "/img/cart-icon-14 (1).png" height="40" ></a>
    </div>
    </div>
    <div id = "page">
        <?php
		require_once("sql.php");
        foreach (get_products("Chips") as $e)
        {
            echo '<div class="grid_item"><p id = "pname">',
                $e[0], '</p><img src = "',
                $e[2], '" height="450" width= "450"><p id = "pprice">R', $e[1], 
                '</p><form action="addtocart.php" method="post"><input type="submit" value="Add to Cart" name="',
                $e[0],'"></form></div>';
        }
        ?>
    </div>
    <div id="foot">
            copyrights &copy to Dylan Slogrove & Ntsikelelo Metseeme
            <div id="right">
                buyStuff.com &copy;
        </div>
    </div>  
</body>
</html>