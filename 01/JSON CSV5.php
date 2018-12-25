<?php

$result = file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', implode(PHP_EOL, [
   'first line',
   'second line',

])); //пишет массив на отдельных строках

var_dump($result);

?>