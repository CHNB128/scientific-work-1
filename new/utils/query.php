<?php
function tabled_query ($mysqli, $headers, $query) {  
  ?>
  <div class="tabel">
    <div class="header">
    <?
    foreach ($headers as $value) {
      ?>
      <div>
        <? echo $value; ?>
      </div>
      <?
    }
    ?>
    </div>
    <div class="body">
    <? 
    if ($result = $mysqli->query($query)) {
      while($obj = $result->fetch_array()){
        foreach ($obj as $value)
        ?>
        <div>
          <? echo $value; ?>
        </div>
        <?
      }
    } 
    ?>
    </div>
  </div>
  <?  

  $result->close();

  unset($obj);
  unset($result); 
}