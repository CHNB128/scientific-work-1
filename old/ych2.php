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
		#submit {
			margin-top: 10%;
			width: 300px;
			margin-left: 35%;
			height: 70px;
			font-size: 35px;
			border-radius: 8px;
			color: yellow;
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
	<a href="ych.php"><button class="button">Назад</button></a>
	<table border="3" id="example">
	    <thead>
            <tr style="color: #09539e;;">
                <td>Учитель</td>
                <td>Примечание</td>
                <td>Ссылка на работу</td>
                <td>Оценка</td>
            </tr>
        </thead>
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
            $result2 = $mysqli->query("SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'");
            while ($row2 = $result2->fetch_assoc()) {
                $ych = $row2['fio'];
            }
            $result2->close();
            $result = $mysqli->query("SELECT * FROM forprepod WHERE ych='" . $ych . "'");
            while ($row = $result->fetch_assoc()) {
                $result1 = $mysqli->query("SELECT * FROM users WHERE login='" . $row['prepod'] . "'");
                while ($row1 = $result1->fetch_assoc()) {
                    $prepod = $row1['fio'];
                }
                $result1->close();
                echo "<form>";
                echo "<tr>";
                echo "<td>" . $prepod . "</td>";
                echo "<td>" . $row['prim'] . "</td>";
                echo "<td>";
                echo "<button><a href='" . $row['url'] . "'>Открыть файл в браузере</button>";
                echo "<button><a href='" . $row['url'] . "' download>Скачать файл</button>";
                echo "</td>";
                echo "<td>" . $row['mark'] . "</td>";
                echo "</tr>";
                echo "</form>";
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