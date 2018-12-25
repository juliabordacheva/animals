<?php

$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'w');

fwrite($resource, 'hello world 1'.PHP_EOL);
fwrite($resource, 'hello world 2'.PHP_EOL);//создали файл и записали в него 2 раза хелло ворлд

?>