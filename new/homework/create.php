<?php
require_once("connection.php");

$query = sprintf(
  "INSERT INTO works (teacher_id, student_id, note) VALUES ('%s','%s','%s')",
  $_POST['teacher_id'],
  $_POST['student_id'],
  $_POST['note']
);

$mysqli->query($query);

header("Location: /admin/index.php");
