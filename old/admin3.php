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
	<table border="3" id="example">
        <thead>
            <tr style="color: #09539e;">
                <td>Роль</td>
                <td>ФИО</td>
                <td>Логин</td>
                <td>Пароль</td>
                <td>Удалить</td>
            </tr>
        </thead>
        <?php
//            ini_set('display_errors', 1);
//            error_reporting(E_ALL);
//            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
//            $result = $mysqli->query("SELECT * FROM users");
//            while ($row = $result->fetch_assoc()) {
//                echo "<tr>";
//                echo "<td>" . $row['fio'] . "</td>";
//                echo "<td>";
//                if ($row['type']==1) {echo "Администратор";}
//                if ($row['type']==2) {echo "Преподаватель";}
//                if ($row['type']==3) {echo "Ученик";}
//                echo "</td>";
//                echo "<td>" . $row['login'] . "</td>";
//                echo "<td>" . $row['password'] . "</td>";
//                echo "</tr>";
//            }
//            $result->close();
        ?>
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $root = realpath($_SERVER["DOCUMENT_ROOT"]); require "$root/connection/index.php";
            $result = $mysqli->query("SELECT * FROM users");
            while ($row = $result->fetch_assoc()) {
                if ($row['type'] != 0) {
                    echo "<tr>";
                    echo "<td>";
                    if ($row['type']==1) {echo "Администратор";}
                    if ($row['type']==2) {echo "Преподаватель";}
                    if ($row['type']==3) {echo "Ученик";}
                    echo "</td>";
                    echo "<td>" . $row['fio'] . "</td>";
                    echo "<td>" . $row['login'] . "</td>";
                    echo "<td>" . $row['password'] . "</td><td>";

                    echo " <form action='";
                    if ($row['type'] == 1) {echo "";} else {echo "del.php";}
                    echo "' method='POST'>";
                    echo "<input type='hidden' name='login' value='" . $row['login'] . "'>";
                    echo "<input type='hidden' name='password' value='" . $row['password'] . "'>";
                    echo "<input type='hidden' name='type' value='" . $row['type'] . "'>";
                    echo "<input type='hidden' name='fio' value='" . $row['fio'] . "'>";
                    if ($row['type'] == 1) {echo "<button disabled='disabled'>Ошибка</button>";} else {echo "<input type='submit' value='Удалить'>";}
                    echo "</form>";

                    echo "</td></tr>";
                }
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
