<?php
header('Content-Type: text/html; charset=utf-8');
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
  if($_GET['q']) {
  	$q = strtolower($_GET['q']);
    $items = @file('autocomplete.dat');
    for($i=0;$i<count($items);$i++){
      $row = explode(':', $items[$i]);
	  if (mb_strpos(mb_strtolower($row[1],'UTF-8'), $q) !== false) {
		print $row[1]."|".$row[2]."|".$row[3]."\n";
	  }
    }
  }
}
?>