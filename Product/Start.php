<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$tomato = new Vegetables('Tomato', 200);
$apple = new Fruit('Apple', 29);
$jacket = new Clothest('Jacket', 200);
$korzina = new Cart();

$korzina->addProduct($tomato); //добавляю товар в корзину
$korzina->addProduct($apple);
$korzina->addProduct($jacket);
echo '<br>';
$korzina->showAllProduct();
 echo '<br>';
 echo '<br>';
echo 'Summa: ' . $korzina->sum();
 ?>
