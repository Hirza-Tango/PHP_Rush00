<?php
require_once("sql.php");
if (create_user($_POST))
	return "OK";
else
	return "Error";
?>