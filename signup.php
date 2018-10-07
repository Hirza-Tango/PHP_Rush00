<?php
session_start();
require_once("sql.php");
if (!$_POST['signup'])
	return print("Error\n");
$user = $_POST;
$user['full_name'] = $user['name']." ".$user['lastname'];
$user['username'] = $user['email'];
$user['card_expiry'].="-01";
if (create_user($user))
{
	echo "User successfully created. Redirecting...";
	sleep(2);
	header("Location: index.html");
}
else
{
	echo "Error: ".mysqli_error($db);
	sleep(2);
	header("Location: index.html");
}
exit();
?>