<?php
require_once('connection.php');

printf("uslt: login start\r\n");

$query = sprintf("SELECT id, login, type FROM users");

printf("uslt: make request\r\n");

printf($query);

if ($result = $mysqli->query($query)) {
  ?>
  <div>
    <!-- header -->
    <div>

    </div>
    <?php
    while($obj = $result->fetch_object()){
      ?>
      <!-- body -->
      <div>
        <div>

        </div>
        <div>

        </div>
        <div>
          
        </div>
      </div>
      <?
    }
  ?>
  </div>
  <?
}

$result->close();

unset($obj);
unset($sql);
unset($query); 