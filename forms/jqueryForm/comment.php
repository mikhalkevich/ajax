<?php
header('Content-Type: text/html; charset=utf-8');
if($_POST['comment']) {
  print '<strong>' . $_POST['name'] . ' сказал:</strong> ' . $_POST['comment'];
}
?>