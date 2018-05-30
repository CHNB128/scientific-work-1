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
    session_start();
  ?>
</head>
<body>
  <nav>
    <a class="button" href="javascript:history.back()">назад</a> 
  </nav>
  <form action="../homework/set_mark.php" method="post">
    <div>
      <label for="work_id">работа</label>
      <select name="work_id">
        <?php
        optioned_query(
          $mysqli,
          sprintf(
            "SELECT id, title FROM works WHERE teacher_id = '%s'",
            $_SESSION['id']
          )
        );
        ?>
      </select>
    </div>
    <div>
      <label for="mark">оценка</label>
      <input type="text" name="mark">
    </div>
    <button type="submit">создать</button>
  </form>
</body>
</html>