<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
    $a = "DELETE FROM users WHERE login='" . $_POST['login'] . "'";
	$mysqli->query($a) or die(mysql_error());

    require_once "connection/index.php";
    $b = "DELETE FROM users WHERE login='" . $_POST['login'] . "'";
	$mysqli->query($b) or die(mysql_error());

	header("Location: admin3.php");
?>