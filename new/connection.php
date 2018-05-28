<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("DB_SERVER", 	"srv-pleskdb41.ps.kz:3306");
define("DB_USER", 		"settk_admin");
define("DB_PASSWORD", "admin123");
define("DB_NAME", 		"settk_uch");
define("DB_CHARSET", 	"utf8");

echo 'conn: setup params';

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);

echo 'conn: connect to database';

if ($mysqli->connect_error) {
  die("conn: connection failed: " . $mysqli->connect_error);
}

echo 'conn: select database';

$mysqli->select_db(DB_NAME);

echo 'conn: select charset';

$mysqli->set_charset(DB_CHARSET);
