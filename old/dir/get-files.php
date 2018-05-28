<?php
/*
*	Данные формы:
*
*	method: post
*
*	path -> путь до директории
*
*/

if(isset($_POST)){
  $dir = dir($_POST['path']);
  ?><ul><?
  while (false !== ($entry = $dir->read())) {
    ?>
    <li>
    <a href='<? echo $dir->path.'/'.$entry. ?>'><? echo $entry ?></a>
    </li>
    <?
  }
  ?></ul><?
  $dir->close();
}
?>
