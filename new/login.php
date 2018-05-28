<?php
require_once('connection.php');

echo 'logn: login start';

// $query = '
//   SELECT type_id
//   FROM users
// 	WHERE login=$_POST['login']
// 	AND	password=$_POST['password']
//   LIMIT 1
// ';

echo 'logn: make request';

$user_data = $mysqli->query($query)->fetch_assoc();

if($user_data) {
  session_start();
  echo 'logn: start session';
  $_SESSION['login'] = $user_data['login'];
  $_SESSION['type'] = $user_data['type'];
  switch ($user_data['type']) {
    case 'admin':
      header("Location: /admin.php");
      break;
    case 'student':
      header("Location: /student.php");
      break;
    case 'teacher':
      header("Location: /teacher.php");
      break;    
  }
} else {
  echo 'logn: user not found';
  header("Location: /index.php");
}