$a = "DELETE FROM users WHERE login='" . $_POST['login'] . "'";
	$mysqli->query($a) or die(mysql_error());