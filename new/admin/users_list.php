<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <nav>
    <a class="button" href="javascript:history.back()">назад</a> 
  </nav>
  <div>
  <?php
    require_once('../connection.php');  
    require_once('../utils/query.php');
    tabled_query(
      $mysqli,
      ["номер", "логин", "имя", "статус"],
      "SELECT id, login, full_name, type FROM users WHERE id != 1 ORDER BY id"
    );
  ?>
  </div>
</body>
</html>