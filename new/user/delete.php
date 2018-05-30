<?php 
require_once('../connection.php');

$query = sprintf(
  "DELETE FROM users WHERE id = '%s')",
  $_POST['id']
);

if($mysqli->query($query) === TRUE) {
  header("Location: /admin/index.php");
} else {
  echo $mysqli->error;
}