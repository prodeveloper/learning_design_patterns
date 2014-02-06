<?php
/**
 * 
 */
interface CartGateway {
	
    function persist(ShoppingCart $cart); 
    function retreive($id);
    function getIdRecordedCart();
}
