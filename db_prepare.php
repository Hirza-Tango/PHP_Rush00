<?php
require_once("config.php");
$query_create_user = mysqli_prepare($db, file_get_contents("queries/create_user.mysql"));
$query_auth = mysqli_prepare($db, file_get_contents("queries/auth.mysql"));
$query_get_user = mysqli_prepare($db, file_get_contents("queries/get_user.mysql"));
$query_update_user = mysqli_prepare($db, file_get_contents("queries/update_user.mysql"));
$query_update_password = mysqli_prepare($db, file_get_contents("queries/update_password.mysql"));
$query_suspend_user = mysqli_prepare($db, file_get_contents("queries/suspend_user.mysql"));
$query_unsuspend_user = mysqli_prepare($db, file_get_contents("queries/unsuspend_user.mysql"));
$query_add_product = mysqli_prepare($db, file_get_contents("queries/add_product.mysql"));
?>