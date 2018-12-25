<!DOCTYPE html>
 <html lang="ru">
 <head>
      <meta charset="UTF-8">
      <title>Additional</title>

 </head>
 <body>
    
     
 
 <h1>Форма</h1>
 <form action="">
 <input type="number" name="age">
 <input type="submit" name="отправить">
 </form>


   <?php 

      
        if  (isset($_GET['age']) && is_numeric($_GET['age'])) {
        if  ($_GET['age'] > 30) {
            echo 'старик' ;
        } else {
            echo 'Ребенок';
        }
    }
    ?>
  </body>
  </html>