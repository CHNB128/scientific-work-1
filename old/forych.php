<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    session_start();
    require_once "connection/index.php";
    $result2 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
    while ($row2 = $result2->fetch_assoc()) {
        $prepod = $row2['fio'];
    }
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
    if ($_FILES && $_FILES['file']['error']== UPLOAD_ERR_OK)
    {
        $name = $_FILES['file']['name'];
        $skob1 = "(";
        $idurl = 1;
        $skob2 = ")";
        $testname = 'homeworks/notstarted/' . $name;

        $ress = $mysqli->query("SELECT url FROM forych");
        while ($roww = $ress->fetch_assoc()) {
            if ($testname == $roww['url']) {
                $testname = 'homeworks/notstarted/' . $skob1 . $idurl . $skob2 . $name;
                $idurl = $idurl + 1;
            }
        }
        $name = $testname;

        move_uploaded_file($_FILES['file']['tmp_name'], $name);
    }
        
    $a = $mysqli->prepare("INSERT INTO forych (id, ych, prepod, prim, url) VALUES (?, ?, ?, ?, ?)");
    $a->bind_param("sssss", $id, $_POST['ych'], $prepod, $_POST['prim'], $name);
    $id = "1";
    $res = $mysqli->query("SELECT id FROM forych");
    while ($row = $res->fetch_assoc()) {
        $id = $row['id'] + 1;
    }
    $result2->close();
    $a->execute();
    $a->close();
    $res->close();

	header("Location: prepod2.php");
?>