<?php
	session_start();
	require_once("sql.php");
	$result = auth($_POST['email'], $_POST['passwd']);
	global $db;
	if ($result)
	{
		$_SESSION['username'] = $_POST['email'];
		echo"OK";
	}
	else
		echo "Error: ".mysqli_error($db);
?>