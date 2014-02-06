<?php
/**
 * 
 */
class ShoppingHistory {
    
    private $gateway;
    private $shoppingCartIds=array();
    function __construct(CartGateway $gateway,$ids=array()) {
        $this->gateway=$gateway;
        $this->shoppingCartIds=$ids;    
    }
    function listAllCarts(){
        $shoppingCarts=array();
        foreach ($this->shoppingCartIds as $id) {
            $shoppingCarts=$this->gateway->retreive($id);
        }
        return $shoppingCarts;
    }
}
