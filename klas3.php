<?php

abstract class Product{
    public $title;
    public $price;
    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}

class Cart{
    public $countProduct = [];
    public function addProduct($product){
       $product->numberProduct = 1;
        if(array_key_exists($product->title, $this->countProduct)){
            $this->countProduct[$product->title]->numberProduct++;
        }
        else{
            $this->countProduct[$product->title] = $product;
        }
    }
    public function deleteOneProduct($product){ //убрать 1 одинаковый продукт
       if(array_key_exists($product->title, $this->countProduct)){

           if($this->countProduct[$product->title]->numberProduct > 0){

                $this->countProduct[$product->title]->numberProduct--;
                echo 'Name ' . $this->countProduct[$product->title]->title. ' Delete<br>';
           }
       }
   }
    public function showAllProduct(){
        $resCountProduct = 0;
        foreach($this->countProduct as $key => $value){
            echo 'Name:' . $key . ',<br>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
      }echo 'Count: ' . $resCountProduct;
    }
    public function sum(){ //подсчитать общую сумму продукта
        $res = 0;
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }

        return $res;

    }
}

class Vegetables extends Product {
  const CONSTANT = 'Vegetable';
  }
//namespace Fruit {
class Fruit extends Product {
    const CONSTANT = 'Fruit';
    function Sale{

    }
    }
//}
//namespace Clothest {
class Clothest extends Product{
    const CONSTANT = 'Clothest';
  }

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
