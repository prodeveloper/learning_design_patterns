<?php
/**
 * 
 */
class ShoppingCart implements Cart{
    private $products=array();
	
    function get_products(){
        return $this->products;
    }
}
