<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form class="form" action="../homework/create.php" method="POST" id="form2">
    <label for="name">
      <h3>Создать индивидуальное занятие</h3>
    </label>
    <select name="prepod" placeholder="Выбрать учителя">
      <?php
            require_once("connection.php");
            $result = $mysqli->query("SELECT login, full_name FROM users WHERE type='teacher'");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['login'] . "'>" . $row['full_name'] . "</option>";
            }
            $result->close();
        ?>
    </select>
    <select name="ych" placeholder="Выбрать ученика">
      <?php
            $result = $mysqli->query("SELECT login, full_name FROM users WHERE type='student'");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['login'] . "'>" . $row['full_name'] . "</option>";
            }
            $result->close();
        ?>
    </select>
    <input type="text" name="prim" placeholder="Примечание от админа">
    <button type="submit">Создать занятие</button>
  </form>
</body>

</html>