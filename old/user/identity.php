<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$root/connection/index.php";
require "$root/meta/secure.php";
require "$root/user/class_user.php";

if(isset($_COOKIE[COOKIE_ACCESS_NAME])) {
	$user = new User();
	$sql = 'SELECT login, access, type, id
					FROM users
					WHERE access=\''.$_COOKIE[COOKIE_ACCESS_NAME].'\' LIMIT 1';
	$rel = $mysqli->query($sql)->fetch_assoc();
	if($rel){
		$user->id = $rel['id'];
		$user->login = $rel['login'];
		$user->path = "$root/main_dir/".$rel['login'].'_'.hash(HASH_TYPE,$rel['login']);
		$sql = 'SELECT value
						FROM users_type
						WHERE id=\''.$rel['type'].'\' LIMIT 1';
		$user->type = $mysqli->query($sql)->fetch_assoc()['value'];
	} else {
		echo 'FAIL';
	}
}
?>