<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
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