Работа с файлами нужна когда нужно записать или считать. Имортируем данные вдругих форматах, вытащить оттуда данные и работать с данными дальше. 
<?php 


$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'r');
$result = fread($resource, 100); //разные символы занимают разное количество байтов
var_dump($result);
 ?>

 //fread может прочитать объем документа
<?php
 $resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'r');
 $result = ' ';
 while ($str = fread($resource, 2)) {
 	if ($str !== PHP_EOL) {
 		$result = $result . $str;
 	} else {
 		$result = $result . "   ";
 	
 	}
 }
 
echo $result //Это пример как мы можем считывать количество данных из файла 




$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'w');

var_dump(fwrite($resource, 'hello world'));

 ?> //создать файл и записать в него хелло ворлд

 