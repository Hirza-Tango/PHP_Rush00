<?php
require_once("sql.php");
$_SESSION['cart'][] = array_search("Add to Cart", $_POST);
header("Location: index.php");
?>