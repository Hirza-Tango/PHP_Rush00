<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/cart.css" />
</head>
<body>
        <div id="head">
            <img src="/img/Screen Shot 2018-10-06 at 23.15.37.png" height="70" width="250">
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
        <div id = "cen"> 
            <h1 style="text-align: left; font-family:monospace">  Bill  </h1>
        <table>
            <tr>
                <th>Products </th>
                <th>Price </th>
                <th>Total </th>
            </tr>
            <?php
                require_once("sql.php");
                session_start();
                $total = 0;
                foreach ($_SESSION['cart'] as $e)
                {
                    
                    $i = get_item($e);
                    echo '<tr><td>', $e,"</td><td>R ", $i[1],"</td><td>R ", $total += $i[1], "</td></tr>";
                }
            ?>
        </table>
        <a href="pay.html"><input type="button" value="Pay Order"></a>
    </div>
    <div id="foot">
                copyrights &copy to Dylan Slogrove & Ntsikelelo Metseeme
                <div id="right">
                    buyStuff.com &copy;
            </div>
        </div>    
</body>

</html>