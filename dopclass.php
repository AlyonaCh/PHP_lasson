<?php
interface ProductIn
  {
      public function GetSale();
      public function __construct($name,$price,$sale);
  }
class Product implements ProductIn{
  public $name;
  public $price;
  public function GetSale(){
    return $this->price=$this->price*0.9;
  }
  public function __construct($name,$price,$sale){
    $this->name=$name;
    $this->price=$price*(1-$sale/100);
  }
}
class Vegetables extends Product {
  const CONSTANT = 'Vegetable';
  }
class Fruit extends Product {
    const CONSTANT = 'Fruit';
    }
class Clothest extends Product{
    const CONSTANT = 'Clothest';
    }
$tomato= new Vegetables('tomato',100,10);
echo $tomato->price.'</br>';
$orange= new Fruit('orange',100,10);
echo $orange->price.'</br>';
$jaket= new Clothest('jaket',1000,0);
echo $jaket->price.'</br>';
?>
