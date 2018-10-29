<?php
header('Content-Type: text/html; charset=utf-8');
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
  if($_GET) {
    print '<h1>Имя: ' . $_GET['name'] . ', возраст: ' . $_GET['age'] . '</h1>';
  }
}
?>