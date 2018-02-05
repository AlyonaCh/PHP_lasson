<?php
 $content=file_get_contents(__DIR__.'/people.json');
 $people=json_decode($content,true);
 ?>
<html>
  <head>
    <title> People </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
<h1>Информация по людям</h1>
  <table>
  <tr>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Адрес</th>
    <th>Телефон</th>
  </tr>
  <?php foreach ($people as $info) {?>
  <tr>
    <td><?php echo $info[firstName] ?></td>
    <td><?php echo $info[lastName] ?></td>
    <td><?php echo $info[address] ?></td>
    <td><?php echo $info[phoneNumber] ?></td>
  </tr><?php }?>
  </table>


  </body>
</html>
