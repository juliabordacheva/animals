<?php

$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'a+');

fwrite($resource, 'write and close');
fclose($resource);
echo fread($resource, 10); //закрыли ресурс

?>

