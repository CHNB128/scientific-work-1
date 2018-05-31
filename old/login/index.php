<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root/meta/secure.php";
require_once "$root/connection/index.php";

$cur_password = hash(HASH_TYPE, $_POST['password']);
$sql = 'SELECT access, type
				FROM users
				WHERE login=\''.$_POST['login'].'\' 
				AND	password=\''.$_POST['password'].'\'
				LIMIT 1';
$rel = $mysqli->query($sql)->fetch_assoc();
if($rel) {
	setcookie(COOKIE_ACCESS_NAME,$rel['access'],COOKIE_LIFE_TIME,'/');
	session_start();
	$_SESSION['login'] = $_POST['login'];
	switch ($rel['type']) {
		case 1:
			header('Location: /admin.php');
			break;
		case 2:
			header('Location: /prepod.php');
			break;
		case 3:
			header("Location: /ych.php");	
			break;
	} 
	echo 'SUCCESS';
} else {
	echo 'FAIL';
}
?>