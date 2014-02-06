<?php
/**
 *
 */
class ShoppingCart {
    private $productInTheCart = array();
    private $productFactory;
    function __construct(){
        
        $this->productFactory= new ProductFactory();
    }

    function add($productId) {
        $this->productInTheCart[]=$this->productFactory->make($productId);
    }


}
