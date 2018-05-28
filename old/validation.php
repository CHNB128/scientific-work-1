,<?php
///student.php?path=$user->path
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root/user/identity.php";

switch ($user->type) {
  case 'admin':
    echo $user->id;
    echo $user->type;
    echo 11;
	header('Location: /admin.php');
    break;
  case 'moderator':
    echo $user->id;
    echo $user->type;
    echo 12;
	header('Location: /prepod.php');
    break;
  case 'user':
    echo $user->id;
    echo $user->type;
    echo 13;
	header("Location: /ych.php");
    break;
}
?>