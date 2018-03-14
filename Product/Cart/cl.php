<?php
namespace Cart ;
 class cl {
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
    public function deleteOneProduct ($product) {
       if(array_key_exists($product->title, $this->countProduct)) {

           if($this->countProduct[$product->title]->numberProduct > 0) {

                $this->countProduct[$product->title]->numberProduct--;
                echo 'Name ' . $this->countProduct[$product->title]->title. ' Delete<br>';
           }
       }
   }
    public function showAllProduct () {
        $resCountProduct = 0;
        foreach($this->countProduct as $key => $value) {
            echo 'Name:' . $key . ',<br>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
      }echo 'Count: ' . $resCountProduct;
    }
    public function sum() { 
        $res = 0;
        foreach ($this->countProduct as $key => $value) {
            $res = $res + ($value->price * $value->numberProduct);
        }

        return $res;

    }
}
?>
