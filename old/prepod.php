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
	<style type="text/css">
		h3 {
			text-align: center;
			font-size: 30pt;
		}
		h2 {
			text-align: center;
			font-size: 25pt;
			color: #09539e;
		}
		.but {
			display: flex;
			flex-direction: row;
			margin-top: 15%;
			margin-left: 1%;

		}
	    button {
	    	width: 250px;
	    	margin-left: 140px;
	    	height: 70px;
	    	font-size: 20pt;
	    	border-radius: 10px;
	    }
	    a :hover {
	    	background-color: #09539e;
			transition: 0.7s;
	    }
	    .button {
	    	width: 125px;
            margin-right: 20vw;
            margin-bottom: 10px;
	    	height: 50px;
	    	font-size: 15pt;
	    	border-radius: 10px;
	    }
	</style>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<div style="display: flex;"><a href="index.php?exit=1"><button class="button">Выход</button></a>
	<h2>Преподаватель  
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            require_once "connection.php";
            $result = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
			while ($row = $result->fetch_assoc()) {
				echo $row['fio'];
			}
			$result->close();
        ?></h2></div>
	<div class="but">
	<a href="prepod1.php"><button>Предметы</button></a>
	<a href="prepod2.php"><button>Дать домашнее задание</button></a>
	<a href="prepod3.php"><button>Журнал успеваемости</button></a>
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