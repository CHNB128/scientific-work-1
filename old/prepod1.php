<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
    session_start();
    $result5 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
	while ($row5 = $result5->fetch_assoc()) {
	   if ($row5['type'] == 2) {
?>
<html lang="en">
<head>
	<style type="text/css">
		table {
			width: 1350px;
			font-size: 25px;
		}
	    .button {
	    	width: 125px;
            margin-bottom: 10px;
	    	height: 50px;
	    	font-size: 15pt;
	    	border-radius: 10px;
	    }
	</style>

</head>
<body>
	<a href="prepod.php"><button class="button">Назад</button></a>
		<meta charset="UTF-8">
	<title>Document</title>
  <table border="1">
   <caption style="color: #09539e;">Таблица предметов преподавателя</caption>
   <tr>
    <th>Ученик</th>
    <th>Примечание</th> <!-- примечание это те данные который админ ввобдит в своей форме(примечание от админа) -->
   </tr>
       <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
            $result = $mysqli->query("SELECT * FROM zanyatie WHERE prepod='" . $_SESSION['login'] . "'");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                require_once "connection/index.php";
                $result1 = $mysqli->query("SELECT * FROM users WHERE login='" . $row['ych'] . "'");
                while ($row1 = $result1->fetch_assoc()) {
                    echo "<td>" . $row1['fio'] . "</td>";
                }
                $result1->close();
                echo "<td>" . $row['prim'] . "</td>";
                echo "</tr>";
            }
            $result->close();
        ?>
  </table>
</body>
</html>
<?
       } else {
           header("Location: .");
       }
	}
	$result5 ->close();
?>