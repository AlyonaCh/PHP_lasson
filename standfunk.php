<?php
$lat='56.86';
$lon='60.61';
$appid='b3b32dcd040e26a9f81723d883be0f00';
 $url="http://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=$appid";
 $content=file_get_contents($url);
 $result=json_decode($content,true);
var_dump($result);
 ?>
<html>
  <head>
    <title> Wheather in Yekaterinburg </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
<h1>Wheather in Yekaterinburg</h1>
  Температура:<?php echo $result["main"]["temp"]?>
  </br>
  Минимальная температура:<?php echo $result["main"]["temp_min"]?>
  </br>
  Максимальная температура:<?php echo $result["main"]["temp_max"]?>
  </br>
  Влажность:<?php echo $result["main"]["pressure"]?>
  </br>
  Давление:<?php echo $result["main"]["humidity"]?>
  </br>
  Скорость ветра:<?php echo $result["wind"]["speed"]?>
  </br>





  </body>
</html>
