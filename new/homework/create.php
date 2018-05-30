<?php
require_once("../connection.php");

$query = sprintf(
  "INSERT INTO works (title, teacher_id, student_id, note) VALUES ('%s','%s','%s','%s')",
  $_POST['title'],
  $_POST['teacher_id'],
  $_POST['student_id'],
  $_POST['note']
);

if($mysqli->query($query) === TRUE) {
  header("Location: /admin/index.php");
} else {
  echo $mysqli->error;
}