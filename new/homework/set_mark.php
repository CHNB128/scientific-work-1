<?php
require_once("connection.php");

$query = sprintf(
  "UPDATE works SET mark = '%s' WHERE student_id = '%s'",
  $_POST['mark'],
  $_POST['student_id']
);

$mysqli->query($query);

header("Location: /admin/index.php");
