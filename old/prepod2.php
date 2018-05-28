<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "connection.php";
    session_start();
    $result5 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
	while ($row5 = $result5->fetch_assoc()) {
	   if ($row5['type'] == 2) {
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        #main {
            display: flex;
            justify-content: center;
        }
        * {
            box-sizing: border-box;
        }
        input, select, .b {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 50%;
            font-size: 13px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
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
	<form class="form" action="forych.php" method="POST" id="form2" enctype='multipart/form-data'>
    <label for="name"><h3>Дать Д/З</h3></label>
	<select name="ych">
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            require_once "connection.php";
            $result = $mysqli->query("SELECT * FROM zanyatie WHERE prepod='" . $_SESSION['login'] . "'");
            while ($row = $result->fetch_assoc()) {
                require_once "connection/index.php";
                $result1 = $mysqli->query("SELECT * FROM users WHERE login='" . $row['ych'] . "'");
                while ($row1 = $result1->fetch_assoc()) {
                    echo "<option value='" . $row1['login'] . "'>" . $row1['fio'] . "</option>";
                }
                $result1->close();
            }
            $result->close();
        ?>
   	</select>
    <input type="file" name="file" placeholder="Отправить файл">
    <input type="text" name="prim" placeholder="Примечание от учителя">
    <button type="submit" class="b">Отправить</button>
  </form>
</body>
</html>
<?
       } else {
           header("Location: .");
       }
	}
	$result5 ->close();
?>