<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root/meta/secure.php";

setcookie(COOKIE_ACCESS_NAME,'/',time()-3600);
?>
