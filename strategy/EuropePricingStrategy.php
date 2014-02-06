<?php
/**
 *
 */
class EuropePricingStrategy implements PriceCalculator {

    function applyDiscounts($price) {
        return -50;
    }

    function addTaxes($price) {
        return $price * 0.05;
    }

    function convertCurrencies($price) {
        return $price;
    }

}
