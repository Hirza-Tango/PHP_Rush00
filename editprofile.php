<?php
session_start();
require_once("sql.php");
if (!$_POST['Edit'])
	return print("Error\n");
$user = $_POST;
$user['full_name'] = $user['name']." ".$user['lastname'];
$user['username'] = $user['email'];
$user['card_expiry'].="-01";
$result = update_user($user);
if ($result)
{
	echo "User successfully updated. Redirecting...";
	sleep(2);
	header("Location: index.php");
}
else
{
	var_dump($result);
	echo "Error: ".mysqli_error($db);
	sleep(2);
	header("Location: index.php");
}
exit();
?>