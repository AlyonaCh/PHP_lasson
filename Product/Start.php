<?php
function myAutoload ($className) {
  $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
  if (file_exists($filePath)) {
   include "$filePath";
  }
}
spl_autoload_register ('myAutoload');
$tomato = new Vegetables\cl ('Tomato', 200);
$apple = new Fruit\cl ('Apple', 29);
$jacket = new Clothest\cl ('Jacket', 200);
$korzina = new Cart\cl ();
$korzina->addProduct ($tomato);
$korzina->addProduct ($apple);
$korzina->addProduct ($jacket);
echo '<br>';
$korzina->showAllProduct ();
echo '<br>';
echo '<br>';
echo 'Summa: ' . $korzina->sum ();
 ?>
