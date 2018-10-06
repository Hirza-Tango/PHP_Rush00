<?php
require_once("config.php");

function create_user($user_form) {
	$stmt = mysqli_prepare($db, file_get_contents("queries/create_user.mysql"));
	if (!preg_match("\w+@\w+\.\w{2-3}", $user_form['username']))
		return false;
	if (!preg_match("(0|\+27})\d{9}", $user_form['phone']))
		return false;
	if (!preg_match("\d{16}", $user_form['card_no']))
		return false;
	if (!preg_match("\d\d:\d\d", $user_form['card_expiry']))
		return false;
	if (!preg_match("\d{4}", $user_form['address_postcode']))
		return false;
	mysqli_bind_param($stmt, "sssssssssss",
		$user_form['username'],
		hash("sha512", $user_form['passwd']),
		$user_form['full_name'],
		$user_form['address_line_1'],
		$user_form['address_line_2'],
		$user_form['address_city'],
		$user_form['address_postcode'],
		$user_form['phone'],
		$user_form['card_no'],
		$user_form['card_owner'],
		$user_form['card_expiry']
	);
	return (mysqli_stmt_execute($stmt));
}

function auth($username, $passwd) {
	$stmt = mysqli_prepare($db, file_get_contents("queries/auth.mysql"));
	mysqli_bind_param($stmt, "ss", $username, hash("sha512", $passwd));
	return (bool(mysqli_stmt_get_result($stmt)));
}

function get_user($username) {
	$stmt = mysqli_prepare($db, file_get_contents("queries/get_user.mysql"));
	mysqli_bind_param($stmt, "s", $username);
	$result = mysqli_stmt_get_result($stmt);
	if ($result)
		$result['card_no'] = preg_replace("^\d{12}", "**** **** **** ", $result['card_no']);
	return ($result);
}
?>