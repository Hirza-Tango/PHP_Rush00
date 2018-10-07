<?php
	$DATABASE_HOST="localhost";
	$DATABASE_USER="root";
	$DATABASE_PASSWORD="toor";
	$DATABASE_DB="rush00";
	$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_DB, 3306, "~/MAMP/mysql/tmp/mysql.sock");
	if (!$db)
		exit(mysqli_connect_error().PHP_EOL);
?>