<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$root/connection/index.php";
require "$root/meta/secure.php";

$id = "1";
$res = $mysqli->query("SELECT id FROM users");
while ($row = $res->fetch_assoc()) {
		$id = $row['id'] + 1;
}

$access = hash(HASH_TYPE, $_POST['password'] . SECRET_ACCESS_KEY);

$query = sprintf(
	"INSERT INTO users (id, login, access, password, fio, subject, type) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
	$id,
	$_POST['login'],
	$access,
  $_POST['password'],
  $_POST['fio'],
  $_POST['subject'],
  $_POST['type']
);

if($mysqli->query($query) === TRUE) {
  mkdir("$root/main_dir/".$_POST['login'].'_'.hash(HASH_TYPE,$_POST['login']),0777);
  header('Location: /admin.php');
} else {
  echo $mysqli->error;
}
/////////////////////////////////////////////////////////////////////////////////////////////////

// if(isset($_POST)) {
// 	$login = $_POST['login'];
// 	$lol = 0;
	
	
//     $result = $mysqli->query("SELECT * FROM users WHERE login='" . $login . "'");
//     while ($row = $result->fetch_assoc()) {
// 		if ($login == $row['login']) {
// 			$lol = 1;
// 		}
//     }
//     $result->close();
// 	if ($lol == 1) {
// 		header('Location: /admin1.php?login=' . $login . '');
// 	} else {
	
// 	$pw = $_POST['password'];
// 	$type = $_POST['type'];
// 	$fio = $_POST['fio'];
// 	$subject = $_POST['subject'];
// 	$password = hash(HASH_TYPE, $pw);
// 	$access = hash(HASH_TYPE, $pw . SECRET_ACCESS_KEY);
// 	$sql = 'INSERT INTO users (login,password,type,access,subject,fio)
// 					VALUE (\''.$login.'\',\''.$_POST['password'].'\',\''.$type.'\',\''.$access.'\',\''.$subject.'\',\''.$fio.'\')';
// 	$mysqli->query($sql);
// 	echo $mysqli-> error;
// 	// обработчик
// 	// редирект
// 	echo "success";
// 	mkdir("$root/main_dir/".$_POST['login'].'_'.hash(HASH_TYPE,$_POST['login']),0777);
	
//     $id = "1";
//     $res = $mysqli->query("SELECT id FROM users");
//     while ($row = $res->fetch_assoc()) {
//         $id = $row['id'] + 1;
//     }
// 	$a = $mysqli->prepare("INSERT INTO users (id, login, password, type, subject, fio) VALUES (?, ?, ?, ?, ?, ?)");
//     $a->bind_param("ssssss", $id, $login,$_POST['password'], $type, $subject, $fio);
//     $a->execute();
//     $a->close();
//     $res->close();
	
// 	header('Location: /admin.php');
	
// 	}
// } else {
// 	// fail
// 	echo "fail";
// }
// 