<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root/connection/meta.php";

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->select_db(DB_NAME);
$mysqli->set_charset(DB_CHARSET);
?>
