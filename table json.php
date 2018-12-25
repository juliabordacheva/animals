


<?php

$data = file_get_contents(__DIR__ . '/table.json');

$contacts = json_decode($data, true);

/*var_dump($contacts);*/

/*$contacts = [
   ['firstName' => 'Иван', 'lastName' => 'Иванов', 'address' => 'г. Москва, ул. Алиева,2', 'phone' => '8(926)111-11-11'],
   ['firstName' => 'Максим', 'lastName' => 'Петров', 'address' => 'г. Клинцы, ул. Сталина,2', 'phone' => '8(926)222-22-22'],
   ['firstName' => 'Елена', 'lastName' => 'Сидорова', 'address' => 'г. Нижневартовск, ул. Ленина,2','phone' => '8(926)333-33-33'],
   ['firstName' => 'Василиса', 'lastName' => 'Козлова', 'address' => 'г. Тверь, ул. Комсомольцев,2', 'phone' => '8(926)444-44-44'],
   ['firstName' => 'Эдуард', 'lastName' => 'Шереметьев', 'address' => 'г. Владивосток, ул. Нижняя,2', 'phone' => '8(926)555-55-55'],
   ['firstName' => 'Артем', 'lastName' => 'Ищенко', 'address' => 'г. Москва, ул. Верхняя,2', 'phone' => '8(926)666-66-66']

];*/



/*echo "<pre>".json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."</pre>";*/

/*exit;*/

?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Таблица</title>
    </head>
    <body>
      <h1>Таблица JSON</h1>

      <table>
         <tr>
            <td>Имя</td>
            <td>Фамилия</td> 
            <td>Адрес</td>
            <td>Телефон</td>
         </tr>

    <?php foreach ($contacts as $contact) { ?>
    	 <tr>
    		<td><?php echo $contact['firstName'] ?></td>
    		<td><?php echo $contact['lastName'] ?></td>
    		<td><?php echo $contact['address'] ?></td>
    		<td><?php echo $contact['phone'] ?></td>
    			
          </tr>
      <?php } ?>
    	</table>	



    	
    </body>
  </html>