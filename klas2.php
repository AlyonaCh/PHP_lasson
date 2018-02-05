<?php//инкапсуляция это создание класса для обьектов с похожими свойствами и методами
// плюсы обьектов в основном это то что можно один раз написать функцию, свойства
//и потом надо будет только по "шаблону" заполнять ну и проще добавить свойство
//группе чем по отдельности.?>
<?php
class ParentClass{
    public $name;
    public $price;
}
interface CarIn{
      public function GetInfo();
}
class Car extends ParentClass implements CarIn{
  public $color;
  public $god;
  public function GetInfo(){
    return 'color:'.$this->color.'; marka: '.$this->name.'; god vipuska:
    '.$this->god.'.</br>';
  }
}
$car1 = new Car();
$car1->color='wite';
$car1->name='kia';
$car1->god='2014';
$car1->price=400000;
echo $car1->GetInfo();
$car2 = new Car();
$car2->color='red';
$car2->name='BMW';
$car2->god='2017';
$car1->price=1000000;
echo $car2->GetInfo();
interface TwIn{
      public function GetNewPrice($sale);
}
class Tw extends ParentClass implements TwIn{
  //  public $name;
  public $color;
  //  public $price;
  public function GetNewPrice($sale){
    return $this->price=$this->price*(1-$sale/100);
  }
}
$tw1 = new Tw();
$tw1->color='gray';
$tw1->name='Sony';
$tw1->price=10000;
$tw1->GetNewPrice(11);
echo 'new price:'.$tw1->price;
interface DuckIn{
      public function __construct($name,$price);
      public function GetInfoProduct();
}
class Duck implements DuckIn{
  public $color;
  public $price;
  public function __construct($name,$price){
   $this->color=$color;
   $this->price=$price;
  }
  public function GetInfoProduct(){
    return 'color:'.$this->color.'; price:'.$this->price.'.</br>';
  }
}
$produkt1= new Duck('grey',1100);
echo $produkt1->GetInfoProduct();
interface PenIn{
      public function __construct($name,$price);
      public function GetInfoProduct();
}
class Pen implements PenIn{
  public $color;
  public $price;
  public function __construct($name,$price){
   $this->color=$color;
   $this->price=$price;
  }
  public function GetInfoProduct(){
    return 'color:'.$this->color.'; price:'.$this->price.'.</br>';
  }
}
$produkt1= new Pen('black',10);
interface ProductIn{
      public function __construct($name,$category,$price);
      public function GetInfoProduct();
}
class Product extends ParentClass implements ProductIn{
  //public $name;
  public $category;
  //public $price;
  public function __construct($name,$category,$price){
    $this->name=$name;
    $this->category=$category;
    $this->price=$price;
  }
  public function GetInfoProduct(){
    return 'name:'.$this->name.'; category: '.$this->category.'; price:
    '.$this->price.'.</br>';
  }
}
$produkt1= new Product('trousers','clothes',1100);
echo $produkt1->GetInfoProduct();
$produkt2= new Product('shirt','clothes',2000);
echo $produkt2->GetInfoProduct();
$produkt3= new Product('shorts','clothes',1000);
echo $produkt3->GetInfoProduct();
$produkt4= new Product('jacket','clothes',5000);
echo $produkt4->GetInfoProduct();
///Новости
interface NewsIn{
    public function __construct($topic,$text);
}
class News implements NewsIn{
  public $topic;
  public $text;
  public function __construct($topic,$text){
    $this->topic=$topic;
    $this->text=$text;
  }
}
$new1=new News('weather', 'Today is cold. It is 25 degrees below zero.' );
/* Наследование это передача свойств и методов от класса родителя классам дочерним.
У класса может быть только один родитель. А полм=иморфизм это само использование
метода родителя*/
//как я поняла нужно придумать один суперкласс для всех описанных выше объектов
// единственное что есть у всех объектов кроме новостей name и price
/* если предположить что обьекты в классе товар были вещами,продуктами можно создать класс
родитель , это конечно будет не корректно но раз того требует задание*/


?>
