<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "connection.php";
    $a = $mysqli->prepare("UPDATE forprepod SET mark=? WHERE id=?");
    $a->bind_param("ss", $_POST['mark'], $_POST['id']);
    $a->execute();
    $a->close();
	header("Location: prepod3.php");
?>