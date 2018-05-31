<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
    session_start();
    $result5 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
	while ($row5 = $result5->fetch_assoc()) {
	   if ($row5['type'] == 1) {
?>
<html lang="en">
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="width.js"></script>
	<meta charset="UTF-8">
	<title>Document</title>
<style>


      input, select, button {

        width: 200px;
        font-size: 13px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
      }
	#form1 label {
        width: 100%;
        font-size: 20px;
        padding: 12px 20px 12px 0px;
        margin-bottom: 12px;
		  color: #09539e;
      }

	#form2 label {
        width: 100%;
        font-size: 20px;
        padding: 12px 20px 12px 40px;
		  color: #09539e;
      }
	h2 {
			text-align: center;
		color: #09539e;
		}
		.but {
			display: flex;
			flex-direction: row;
			margin-top: 15%;
			margin-left: 16%;

		}
	    button {
	    	margin-left: 140px;
	    	height: 70px;
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
</head>
<body>
	<div id="main">
	<div id="form2">
	<div style="display: flex;"><a href="index.php?exit=1"><button class="button">Выход</button></a>
	<h2>Администратор 
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
            $result = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
			while ($row = $result->fetch_assoc()) {
				echo $row['fio'];
			}
			$result->close();
        ?></h2></div>
	<div class="but">
	<a href="admin1.php?login="><button>Добавить пользователя</button></a>
	<a href="admin2.php"><button>Создать индивидуальное задание</button></a>
	<a href="admin3.php"><button>Таблица аккаунтов</button></a>
	</div>
	<!--
	<form class='form' id="dellek" action="dellek.php" method="POST">
		    <select name="id">
			<?php 
				$result = $mysqli->query("SELECT * FROM user WHERE lec='Учитель'");
				while ($row = $result->fetch_assoc()) {
					echo "<option value='" . $row['id'] . "'>" . $row['login'] . "</option>";
				}
				$result->close();

			?>
		     </select>
		<input type="text" name="name" placeholder="Предмет">
		<button type="submit">Задать предмет</button>
	 </form>
	-->
	</div>
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