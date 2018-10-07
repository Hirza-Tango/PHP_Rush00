<?php
	session_start();
	require_once("sql.php");
	//var_dump($_POST['email'], hash("sha512",$_POST['passwd']));
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