<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

define("DB_SERVER", 	"srv-pleskdb41.ps.kz:3306");
define("DB_USER", 		"settk_admin");
define("DB_PASSWORD", "admin123");
define("DB_NAME", 		"settkz_uch");
define("DB_CHARSET", 	"utf8");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD,DB_NAME);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset(DB_CHARSET);
?>
