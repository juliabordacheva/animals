считать все содержимоле файла
 <?php

$result = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt');

var_dump($result);

?>