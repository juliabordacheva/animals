

<?php

$result = file(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', FILE_IGNORE_NEW_LINES);
  foreach ($result  as $row) {
  	$parsed = explode(';', $row);
  	print_r($parsed);
  }