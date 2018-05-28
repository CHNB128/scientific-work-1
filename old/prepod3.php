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
     
     
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
	
	
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table {
			width: 1250px;
			font-size: 20pt;
		}
		a {
			text-decoration: none;
		}
	    button {
	    	width: 50%;
	    	height: 50px;
	    	font-size: 15pt;
	    	border-radius: 10px;
	    }
	    .button {
	    	width: 125px;
            margin-bottom: 10px;
	    	height: 50px;
	    }
	</style>
</head>
<body>
	<a href="prepod.php"><button class="button">Назад</button></a>
	<table id="example" border="3">
	    <thead>
            <tr style="color: #09539e;">
                <td class="site_name">Ученик</td>
                <td>Примечание</td>
                <td>Ссылка на работу</td>
                <td>Поставить оценку</td>
                <td>Оценка</td>
            </tr>
        </thead>
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            require_once "connection.php";
            $result = $mysqli->query("SELECT * FROM forprepod WHERE prepod='" . $_SESSION['login'] . "'");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ych'] . "</td>";
                echo "<td>" . $row['prim'] . "</td>";
                echo "<td>";
                echo "<button><a href='" . $row['url'] . "'>Открыть файл в браузере</button>";
                echo "<button><a href='" . $row['url'] . "' download>Скачать файл</button>";
                echo "</td>";
                echo "<td><form action='mark.php' method='POST'><input type='hidden' name='id' value='" . $row['id'] . "'>
                    <p class='g1'>
                        <select name='mark'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select> 
                    <input type='submit' value='Отправить'></p></form>
                </td>";
                echo "<td>" . $row['mark'] . "</td>";
                echo "</tr>";
            }
            $result->close();
        ?>
	</table>
	<script>
          $(function(){
            $("#example").dataTable({
                language: {
                      "processing": "Подождите...",
                      "search": "Поиск:",
                      "lengthMenu": "Показать _MENU_ записей",
                      "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                      "infoEmpty": "Записи с 0 до 0 из 0 записей",
                      "infoFiltered": "(отфильтровано из _MAX_ записей)",
                      "infoPostFix": "",
                      "loadingRecords": "Загрузка записей...",
                      "zeroRecords": "Записи отсутствуют.",
                      "emptyTable": "В таблице отсутствуют данные",
                      "paginate": {
                        "first": "Первая",
                        "previous": "Предыдущая",
                        "next": "Следующая",
                        "last": "Последняя"
                      },
                      "aria": {
                        "sortAscending": ": активировать для сортировки столбца по возрастанию",
                        "sortDescending": ": активировать для сортировки столбца по убыванию"
                      }
                  }
            });
          })
    </script>
</body>
</html>
<?
       } else {
           header("Location: .");
       }
	}
	$result5 ->close();
?>