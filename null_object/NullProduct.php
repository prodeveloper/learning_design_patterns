<?php
/**
 *  
 */
class NullProduct implements Product {
	
	   function getPrice(){
	       
           return 0;
	   }
    function getDescription(){
        return '';
    }
    function getImage(){
        return '/default';
    }
}
