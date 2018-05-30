<?php
require_once("connection.php");

$query = sprintf(
  "UPDATE works SET mark = '%s' WHERE student_id = '%s' AND id = '%s'",
  $_POST['mark'],
  $_POST['student_id'],
  $_POST['work_id']
);

if($mysqli->query($query) === TRUE) {
  header("Location: /admin/index.php");
} else {
  echo $mysqli->error;
}