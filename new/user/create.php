<?php 
require_once('../connection.php');

$query = sprintf(
  "INSERT INTO users (login, password, type) VALUES ('%s','%s','%s')",
  $_POST['login'],
  $_POST['password'],
  $_POST['type']
);

$mysqli->query($query);

header("Location: /admin/index.php");