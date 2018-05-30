<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
  <?php
    require_once("../connection.php");
    require_once("../utils/query.php");
  ?>
</head>
<body>
  <nav>
    <a class="button" href="javascript:history.back()">назад</a> 
  </nav>
  <form action="../user/create.php" method="post">
    <div>
      <label for="login">логин</label>
      <input type="text" name="login">
    </div>
    <div>
      <label for="password">пароль</label>
      <input type="text" name="password">
    </div>
    <div>
      <label for="full_name">имя</label>
      <input type="text" name="full_name">
    </div>
    <div>
      <label for="subject_id">предмет</label>
      <select name="subject_id">
        <?php
          optioned_query(
            $mysqli,
            "SELECT id, title FROM subject"
          );
        ?>
      </select>
    </div>
    <div>
      <label for="type">тип</label>
      <select name="type">
        <option value="teacher">учитель</option>
        <option value="student">студент</option>
      </select>
    </div>
    <button type="submit">создать</button>
  </form>
</body>
</html>