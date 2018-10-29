<?php
header('Content-Type: text/html; charset=utf-8');
print 'В <strong>' . date("H:i:s", time()) . '</strong> передано:<br />';
print_r($_POST);
print '<br />';
print_r($_FILES);
?>