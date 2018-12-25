 <?php

 $resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'money5.csv', 'r');

 if (!$resource) {
 	
 }


 $lines = [
['12 december 2018', 'apple','500'],
['13 december 2018', 'pineapple','200'],
['12 december 2018', 'bread','500'],
['13 december 2018', 'banana','2100'],

 ];
 foreach ($lines as $line) {
 	fputcsv($resource, $line, ';');
 	# code...
 }

  $argv = [
['date' => '12 december 2018', 'food' => 'apple', 'price' => '500'],
['date' => '13 december 2018', 'food' => 'pineapple', 'price' => '200'],
['date' => '12 december 2018', 'food' => 'bread', 'price' => '500'],
['date' => '13 december 2018', 'food' => 'banana', 'price' => '2100'],
  ];
$a = '12 december 2018'; '13 december 2018'; '12 december 2018'; '13 december 2018';
$argv = explode(';', $a);
echo $a

$b = 'apple'; 'pineapple'; 'bread'; 'banana';
$argv = explode(';', $b);
echo $b

$c = '500';'200';'500';'2100';
$argv = explode(';', $c);
echo $c

if ($row[0] === date('Y-m-d')) {
}

if ($lines as $price) {
	$price+$price;
 }
?>