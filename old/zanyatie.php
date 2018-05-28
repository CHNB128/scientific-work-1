<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "connection.php";
    $a = $mysqli->prepare("INSERT INTO zanyatie (id, ych, prepod, prim) VALUE (?, ?, ?, ?)");
    $a->bind_param("ssss", $id, $_POST['ych'], $_POST['prepod'], $_POST['prim']);
    $id = "1";
    $res = $mysqli->query("SELECT id FROM zanyatie");
    while ($row = $res->fetch_assoc()) {
        $id = $row['id'] + 1;
    }
    $a->execute();
    $a->close();
	header("Location: admin2.php");
?>