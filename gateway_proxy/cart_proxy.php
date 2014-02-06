<?php
require_once 'shopping_cart.php';
/**
 * 
 */
class CartProxy implements Cart {
    private $shoppingCart;
	
	function get_products(){
	    if(is_null($this->shoppingCart))
	    $this->$shoppingCart= new ShoppingCart();
        return $this->$shoppingCart->get_products();
	}
}
