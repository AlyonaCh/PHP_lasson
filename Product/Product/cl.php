<?php
namespace Product;

abstract class cl
{
    public $title;
    public $price;
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
}
?>
