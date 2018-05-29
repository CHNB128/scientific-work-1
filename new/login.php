<?php
require_once('connection.php');

printf("logn: login start\r\n");

$query = sprintf(
  "SELECT type, login FROM users WHERE login='%s' AND password='%s' LIMIT 1",
  $_POST['login'],
  $_POST['password']
);

printf("logn: make request\r\n");

printf($query);

if($user_data = $mysqli->query($query)) {
  $user_data = $user_data->fetch_assoc();
  session_start();
  printf("logn: start session\r\n");
  $_SESSION['login'] = $user_data['login'];
  $_SESSION['type'] = $user_data['type'];
  switch ($user_data['type']) {
    case 'admin':
      header("Location: /admin/index.php");
      break;
    case 'student':
      header("Location: /student/index.php");
      break;
    case 'teacher':
      header("Location: /teacher/index.php");
      break;    
  }
} else {
  printf("logn: user not found\r\n");
  printf($mysqli->error);
  header("Location: /index.php");
}