<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "connection.php";
    session_start();
    $result5 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
	while ($row5 = $result5->fetch_assoc()) {
	   if ($row5['type'] == 1) {
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.reg {
			margin-top: 7%;
			margin-left: 34%;
		}
		.forma {
			display: flex;
			flex-direction: column;
			width: 300px;

		}
		h1 {
			color: #09539e;
			font-size: 25px;
		}
		form {
						margin-top: 0%;
			margin-left: 34%;

		}
				button {
			       	height: 40px;
       	width: 34%;
		font-size: 15px;
					border: 1px solid #ddd;
		}
		.one {
			height: 30px;
			font-size: 13pt;
		}
		.two2 {
			font-size: 13pt;
		}
		.two {
					       	height: 10px;
       	width: 10px;
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
	<a href="admin.php"><button class="button">Назад</button></a>
	    <div class="reg">
		<h1>Регистрация</h1><?php
           if ($_GET['login'] != "") {
		      echo "<label>Логин <b>" . $_GET['login'] . "</b> уже занят</label>";}?>
		</div>
		<form action="logup/index.php" method="post">
			<div class="forma">
			<input class="one" required type="login" name="login" placeholder="Введите имя">
			<input class="one" required type="password" name="password" placeholder="Придумайте пороль">
			<input class="one" required type="text" name="fio" placeholder="ФИО">
			</div>
			<p class="two2"><b>Выберите тип пользователя:</b></p>
				  
				  <label>Преподаватель</label>
   <input class="two" type="radio" name="type" value="2" checked="checked">
				  <label>Ученик</label>
   <input class="two" type="radio" name="type" value="3">
			<button type="submit" id="but">Создать</button>
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