<?php 
require_once('../connection.php');

$query = sprintf(
  "DELETE FROM users WHERE login = '%s')",
  $_POST['login']
);

$mysqli->query($query);

header("Location: /admin/index.php");