<?
	ini_set('display_errors', 1); 
	error_reporting(E_ALL); 
	require_once 'connection.php';
	$stmt = $mysqli->prepare("INSERT INTO user (id, login, passwd, lec) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $id, $p2, $p3, $p4 );
	$id = 1;
	$p2 = $_POST['name'];
	$p3 = $_POST['lecture'];
	$p4 = $_POST['hero'];
	$res = $mysqli->query("SELECT id FROM user");
	while($data = $res->fetch_assoc())
	{
		$id = $data['id'] + 1;
	}
	$stmt->execute();
	$res->close();
	$stmt->close();
	header("Location: admin.php");