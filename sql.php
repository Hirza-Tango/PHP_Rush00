<?php
require_once("db_prepare.php");

function create_user($user_form) {
	if (!preg_match("\w+@\w+\.\w{2-3}", $user_form['username']))
	return false;
	if (!preg_match("(0|\+\d{2-3})\d{9}", $user_form['phone']))
	return false;
	if (!preg_match("\d{16}", $user_form['card_no']))
	return false;
	if (!preg_match("\d\d:\d\d", $user_form['card_expiry']))
	return false;
	if (!preg_match("\d{4}", $user_form['address_postcode']))
	return false;
	mysqli_bind_param($query_create_user, "sssssssssss",
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
		$user_form['card_expiry'],
		$user_form['username']
	);
	return (mysqli_stmt_execute($query_create_user));
}

function auth($username, $passwd) {
	mysqli_bind_param($query_auth, "ss", $username, hash("sha512", $passwd));
	return (bool(mysqli_stmt_get_result($query_auth)));
}

function get_user($username) {
	mysqli_bind_param($query_get_user, "s", $username);
	$result = mysqli_stmt_get_result($query_get_user);
	if ($result)
		$result['card_no'] = preg_replace("^\d{12}", "**** **** **** ", $result['card_no']);
	return ($result);
}

function update_user($user_form){
	mysqli_bind_param($query_update_user, "ssssssssss",
		$user_form['full_name'],
		$user_form['address_line_1'],
		$user_form['address_line_2'],
		$user_form['address_city'],
		$user_form['address_postcode'],
		$user_form['phone'],
		$user_form['card_no'],
		$user_form['card_owner'],
		$user_form['card_expiry'],
		$user_form['username']
	);
	return(mysqli_stmt_execute($query_update_user));
}

function update_password($username, $oldpw, $newpw){
	if (!auth($username, $oldpwd))
		return false;
	mysqli_bind_param($query_update_password, "ss",
		hash("sha512", $newpw), $username
	);
	return(mysqli_stmt_execute($query_update_password));
}

function suspend_user($username){
		mysqli_bind_param($query_suspend_user, "s", $username);
	return(mysqli_stmt_execute($query_suspend_user));
}

function unsuspend_user($username){
	mysqli_bind_param($query_unsuspend_user, "s", $username);
return(mysqli_stmt_execute($query_unsuspend_user));
}

function add_product($product_form){
	mysqli_bind_param($query_add_product, "sdss", 
		$product_form['name'],
		$product_form['price'],
		$product_form['description'],
		$product_form['image']
	);
	return(mysqli_stmt_execute($query_add_product));
}

function add_category($category){
	mysqli_bind_param($query_add_category, "s", $category);
	return(mysqli_stmt_execute($query_add_category));
}

function add_product_to_category($product, $category){
	mysqli_bind_param($query_add_product_to_category, "ss", $product, $category);
	return(mysqli_stmt_execute($query_add_product_to_category));
}

function get_products($category){
	mysqli_bind_param($query_get_products, "s", $category);
	return(mysqli_stmt_get_result($query_get_products));
}

function add_to_basket($product, $username){
	mysqli_bind_param($query_add_to_basket, "ss", $username, $product);
	return(mysqli_stmt_execute($query_add_to_basket));
}

function get_basket($username){
	mysqli_bind_param($query_get_basket, "s", $username);
	return(mysqli_stmt_get_result($query_get_basket));
}

function remove_from_basket($product, $username){
	mysqli_bind_param($query_remove_from_basket, "ss", $username, $product);
	return(mysqli_stmt_execute($query_remove_from_basket));
}

function submit_basket($username){
	mysqli_bind_param($query_sumbit_basket, "ss", $username, $username);
	return(mysqli_stmt_execute($query_submit_basket));
}
?>