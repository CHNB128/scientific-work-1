<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
/*
*	Данные формы:
*
*	method: post
*
*	login -> логин пользователя
*	password -> пароль
*	type -> тип профеля
*
*/

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$root/connection/index.php";
require "$root/meta/secure.php";

if(isset($_POST)) {
	$login = $_POST['login'];
	$lol = 0;
	
	
    $result = $mysqli->query("SELECT * FROM users WHERE login='" . $login . "'");
    while ($row = $result->fetch_assoc()) {
		if ($login == $row['login']) {
			$lol = 1;
		}
    }
    $result->close();
	if ($lol == 1) {
		header('Location: /admin1.php?login=' . $login . '');
	} else {
	
	$pw = $_POST['password'];
	$type = $_POST['type'];
	$fio = $_POST['fio'];
	$password = hash(HASH_TYPE, $pw);
	$access = hash(HASH_TYPE, $pw . SECRET_ACCESS_KEY);
	$sql = 'INSERT INTO users (login,password,type,access,fio)
					VALUE (\''.$login.'\',\''.$password.'\',\''.$type.'\',\''.$access.'\',\''.$fio.'\')';
	$mysqli->query($sql);
	echo $mysqli-> error;
	// обработчик
	// редирект
	echo "success";
	mkdir("$root/main_dir/".$_POST['login'].'_'.hash(HASH_TYPE,$_POST['login']),0777);
	
	$mysqli = new mysqli("srv-pleskdb28.ps.kz:3306", "diplo_00", "diplo_00", "diplomk1_00");
    $id = "1";
    $res = $mysqli->query("SELECT id FROM users");
    while ($row = $res->fetch_assoc()) {
        $id = $row['id'] + 1;
    }
	$a = $mysqli->prepare("INSERT INTO users (id, login, password, type, fio) VALUES (?, ?, ?, ?, ?)");
    $a->bind_param("sssss", $id, $login, $pw, $type, $fio);
    $a->execute();
    $a->close();
    $res->close();
	
	header('Location: /admin.php');
	
	}
} else {
	// fail
	echo "fail";
}
?>