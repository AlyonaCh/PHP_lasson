<?php//инкапсуляция это создание класса для обьектов с похожими свойствами и методами
// плюсы обьектов в основном это то что можно один раз написать функцию, свойства
//и потом надо будет только по "шаблону" заполнять ну и проще добавить свойство
//группе чем по отдельности.?>
<?php
class Car extends ParentClass {
  public $color;
  //public $name;
  public $god;
//  public $price;
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
class Tw extends ParentClass{
//  public $name;
  public $color;
//  public $price;
  public function GetNewPrice($sale){
    return $this->price=$this->price*($sale/100+1);
  }
}
$tw1 = new Tw();
$tw1->color='gray';
$tw1->name='Sony';
$tw1->price=10000;
$tw1->GetNewPrice(11);
echo 'new price:'.$tw1->price;
//осталось попробовать внедрить конструктор решила сделать это на товаре
//шариковую ручку и утку описывать не буду не интересно
class Product extends ParentClass{
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
class News{
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
class ParentClass //суперкласс
{
  public $name;
  public $price;
}

?>
