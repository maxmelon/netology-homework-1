<?php
ini_set("display_errors", "On"); error_reporting(E_ALL);
$FirstName = "Вениамин";
$LastName = "Гейнбихнер";
$Age = "22";
$Town = "Берлин";
$Detail = "Все отлично";
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>О себе</title>
     <style>
     dl {
       display: table-row;
     }
     dt, dd {
       display: table-cell;
       padding: 5px 10px;
     }
     h3 {
       padding: 5px 10px;
     }
     </style>
   </head>

   <body>
      <h3>Страничка о себе</h3>
     <dl>
       <dt>Имя</dt>
       <dd><?php echo "$FirstName"; ?></dd>
     </dl>
     <dl>
       <dt>Фамилия</dt>
       <dd><?php echo "$LastName"; ?></dd>
     </dl>
     <dl>
       <dt>Возраст</dt>
       <dd><?php echo "$Age"; ?></dd>
     </dl>
     <dl>
       <dt>Город</dt>
       <dd><?php echo "$Town"; ?></dd>
     </dl>
     <dl>
       <dt>О себе</dt>
       <dd><?php echo "$Detail"; ?></dd>
     </dl>

   </body>
 </html>
