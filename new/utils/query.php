<?php
function tabled_query ($mysqli, $headers, $query) {  
  ?>
  <div class="tabel">
    <div class="header row">
    <?
    foreach ($headers as $value) {
      ?>
      <div class="col">
        <? echo $value; ?>
      </div>
      <?
    }
    ?>
    </div>
    <div class="body">
    <? 
    if ($result = $mysqli->query($query)) {
      while($obj = $result->fetch_assoc()){
        ?>
        <div class="row">
        <?
        foreach ($obj as $value) {
          ?>
          <div class="col">
            <? echo $value; ?>
          </div>
          <?
        }
        ?>
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

function optioned_query ($mysqli, $query) {  
  if ($result = $mysqli->query($query)) {
    while($obj = $result->fetch_array()){
      ?>
        <option value="<? echo $obj[0]; ?>"><? echo $obj[1]; ?></option>
      <?
    }
  } 

  $result->close();

  unset($obj);
  unset($result); 
}