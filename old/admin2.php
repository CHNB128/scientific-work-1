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
<html>
  <head>
    <title>Untitled</title><style>
	 {
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

      input, select, button {
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
	<a href="admin.php"><button class="button">Назад</button></a>
<form class="form" action="zanyatie.php" method="POST" id="form2">
    <label for="name"><h3>Создать индивидуальное занятие</h3></label>
	<select name="prepod" placeholder="Выбрать учителя">
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            require_once "connection/index.php";
            $result = $mysqli->query("SELECT * FROM users WHERE type=2");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['login'] . "'>" . $row['fio'] . "</option>";
            }
            $result->close();
        ?>
    </select>
	<select name="ych" placeholder="Выбрать ученика">
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            require_once "connection/index.php";
            $result = $mysqli->query("SELECT * FROM users WHERE type=3");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['login'] . "'>" . $row['fio'] . "</option>";
            }
            $result->close();
        ?>
    </select>
    <input       type="text"      name="prim"      placeholder="Примечание от админа">
    <button type="submit">Создать занятие</button>
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
