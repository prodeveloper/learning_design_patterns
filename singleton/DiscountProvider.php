<?php

class DiscountProvider {
    private static $instance=null;
            function __construct() {
        //Run complicated initial 
    }
    static function getInstance() {
        if(self::$instance==null){
            self::$instance= new DiscountProvider();
        }
        return self::$instance;
    }
    function getDiscount($productId) {
        //Return discount as percentage
        return rand(10,20);
    }

}