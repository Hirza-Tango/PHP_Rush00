<?php
	session_start();
	require_once("sql.php");
	$result = auth($_POST['email'], $_POST['passwd']);
	global $db;
	if ($result)
	{
		$_SESSION['username'] = $_POST['email'];
		$_SESSION['full_name'] = $result;
		echo"Login successful. Redirecting...";
		sleep(2);
		header("Location: index.php");
	}
	else
	{
		echo "Login failed";
		sleep(2);
		header("Location: login.html");
	}
?>