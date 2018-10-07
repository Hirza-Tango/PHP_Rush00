<?php
session_start();
require_once("sql.php");
$_SESSION['cart'][] = preg_replace("/\_/", " ",array_search("Add to Cart", $_POST));
header("Location: index.php");
?>