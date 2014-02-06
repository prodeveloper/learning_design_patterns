<?php
/**
 * 
 */
class USAPricingStrategy implements PriceCalculator {
	    function applyDiscounts($price) {
        return -40;
    }

    function addTaxes($price) {
        return $price * 0.05;
    }

    function convertCurrencies($price) {
        return $price*0.9;
    }
}
