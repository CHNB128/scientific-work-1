<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
    session_start();
    $result5 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
	while ($row5 = $result5->fetch_assoc()) {
	   if ($row5['type'] == 3) {
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        body {
            display: flex;
            flex-direction: row;
        }
        #main {
            display: flex;
            justify-content: center;
        }
        * {
            box-sizing: border-box;
        }

        input, select, #submit {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 50%;
            font-size: 13px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
	    	border-radius: 0px;
        }
        #form1 label {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 20px;
            padding: 12px 20px 12px 0px;
            margin-bottom: 12px;
              color: #09539e;
        }

        #form2 label {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 20px;
            padding: 12px 20px 12px 40px;
            margin-bottom: 12px;
              color: #09539e;
        }
        .two {
            margin-left: 10%;
        }
        .g1 {
            height: 80px;
        }
        table {
            width: 600px;
            margin-top: 8%;
            margin-left: 5%;
        }
        input {
            height: 40px;
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
	<a href="ych.php"><button class="button">Назад</button></a>
	<div class="one">
        <table border="3">
            <tr style="color: #09539e;">
                <td>Учитель</td><!-- только те учителя которые задали дз -->
                <td>Примечание</td>
                <td>Ссылка на работу</td>
            </tr>
            <?php
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
                $result = $mysqli->query("SELECT * FROM forych WHERE ych='" . $_SESSION['login'] . "'");
                while ($row = $result->fetch_assoc()) {
                    echo "<form>";
                    echo "<tr>";
                    echo "<td>" . $row['prepod'] . "</td>";
                    echo "<td>" . $row['prim'] . "</td>";
                    echo "<td>";
                    echo "<div><button><a href='" . $row['url'] . "'>Открыть файл в браузере</button>";
                    echo "<button><a href='" . $row['url'] . "' download>Скачать файл</button></div>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</form>";
                }
                $result->close();
            ?>
	    </table>
	</div>
	<div class="two">
        <form class="form" action="forprepod.php" method="POST" id="form2" enctype='multipart/form-data'>
            <label for="name"><h3>Дать Д/З</h3></label>
            <select name="prepod" placeholder="Выбрать учителя">
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
            session_start();
            $result = $mysqli->query("SELECT * FROM zanyatie WHERE ych='" . $_SESSION['login'] . "'");
            while ($row = $result->fetch_assoc()) {
                require_once "connection/index.php";
                $result1 = $mysqli->query("SELECT * FROM users WHERE login='" . $row['prepod'] . "'");
                while ($row1 = $result1->fetch_assoc()) {
                    echo "<option value='" . $row1['login'] . "'>" . $row1['fio'] . "</option>";
                }
                $result1->close();
            }
            $result->close();
        ?>
            </select>
            <input type="file" name="file" placeholder="Отправить файл">
            <input type="text" name="prim" placeholder="Примечание учителЮ">
            <button id="submit" type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>
<?
       } else {
           header("Location: .");
       }
	}
	$result5 ->close();
?>