<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['full_name']);
	unset($_SESSION['cart_count']);
	unset($_SESSION['cart_value']);
	header("Location: index.php");
?>