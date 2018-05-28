<?php
ini_set('display_errors', 1); 
	error_reporting(E_ALL); 
	require_once('connection.php'); 
	if (($_GET['login'] != '') and ($_GET['password'] != '')) {
		$login = $_GET['login'];
		$passwd = $_GET['password'];
		if ($stmt = $mysqli->prepare("SELECT login, passwd FROM admin WHERE login = ? AND passwd = ?")) {
			$stmt->bind_param("ss", $login, $passwd);
			if ($stmt->execute()) {
				$stmt->bind_result($logina, $passwda);
				$stmt->fetch();
				if ($login == $logina and $passwd == $passwda) {
					header("Location: admin.php");
					$stmt->close();
					exit();
				} else {
					header("Location: index.php");
					$stmt->close();
					exit();
				}
			} else {
				echo "erro2";	
			}
		} else {
			echo "erro1";
		}
	} else {
		header("Location: index.php");
	}
?>