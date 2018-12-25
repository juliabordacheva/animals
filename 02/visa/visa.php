 <?php

 $resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'opendata.csv', 'w');

 if (!$resource) {
 	echo 'Cant read file';
 	exit;
 }
 $row = 1; 4;
 while ($data = fgetcsv($resource, 0, ';')) {
 	 $row++;
 	 echo "Row 1" . $row . " contains " . count($data) . " fields" . PHP_EOL;
 	 print_r($data);
 	 echo PHP_EOL;
 }
 ?>