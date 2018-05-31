<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

$mysqli = new mysqli("srv-pleskdb41.ps.kz:3306", "settk_admin", "admin123","settkz_uch");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");
?>
