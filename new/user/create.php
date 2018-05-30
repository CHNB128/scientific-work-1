<?php 
require_once('../connection.php');

$query = sprintf(
  "INSERT INTO users (login, password, full_name, subject_id, type) VALUES ('%s', '%s', '%s', '%s', '%s')",
  $_POST['login'],
  $_POST['password'],
  $_POST['full_name'],
  $_POST['subject_id'],
  $_POST['type']
);

if($mysqli->query($query) === TRUE) {
  header("Location: /admin/index.php");
} else {
  echo $mysqli->error;
}