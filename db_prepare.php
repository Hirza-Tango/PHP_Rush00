<?php
require_once("config.php");
global $db;
$query_create_user = mysqli_prepare($db, file_get_contents("queries/create_user.mysql"));
$query_auth = mysqli_prepare($db, file_get_contents("queries/auth.mysql"));
$query_get_user = mysqli_prepare($db, file_get_contents("queries/get_user.mysql"));
$query_update_user = mysqli_prepare($db, file_get_contents("queries/update_user.mysql"));
$query_update_password = mysqli_prepare($db, file_get_contents("queries/update_password.mysql"));
$query_suspend_user = mysqli_prepare($db, file_get_contents("queries/suspend_user.mysql"));
$query_unsuspend_user = mysqli_prepare($db, file_get_contents("queries/unsuspend_user.mysql"));
$query_add_product = mysqli_prepare($db, file_get_contents("queries/add_product.mysql"));
$query_add_category = mysqli_prepare($db, file_get_contents("queries/add_category.mysql"));
$query_get_products = mysqli_prepare($db, file_get_contents("queries/get_products.mysql"));
$query_get_all_products = mysqli_prepare($db, file_get_contents("queries/get_all_products.mysql"));
$query_add_product_to_category = mysqli_prepare($db, file_get_contents("queries/add_product_to_category.mysql"));
$query_add_to_basket = mysqli_prepare($db, file_get_contents("queries/add_to_basket.mysql"));
$query_get_basket = mysqli_prepare($db, file_get_contents("queries/get_basket.mysql"));
$query_remove_from_basket = mysqli_prepare($db, file_get_contents("queries/remove_from_basket.mysql"));
$query_submit_basket = mysqli_prepare($db, file_get_contents("queries/submit_basket.mysql"));
$query_create_order = mysqli_prepare($db, file_get_contents("queries/create_order.mysql"));
$query_get_item = mysqli_prepare($db, file_get_contents("queries/get_item.mysql"));
?>