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
  <form action="../homework/create.php" method="post">
    <div>
      <label for="title">название</label>
      <input type="text" name="title">
    </div>
    <div>
      <label for="teacher_id">учитель</label>
      <select name="teacher_id">
        <?php
        optioned_query(
          $mysqli,
          "SELECT id, full_name FROM users WHERE id != 1 AND type = 'teacher'" 
        );
        ?>
      </select>
    </div>
    <div>
      <label for="student_id">студент</label>
      <select name="student_id">
        <?php
          optioned_query(
            $mysqli,
            "SELECT id, full_name FROM users WHERE id != 1 AND type = 'student'" 
          );
        ?>
      </select>
    </div>
    <div>
      <label for="note">примечание</label>
      <input type="text" name="note">
    </div>
    <button type="submit">создать</button>
  </form>
</body>
</html>