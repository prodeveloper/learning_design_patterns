<?php
/**
 * 
 */
class GrandPrice {

    private $sellerFrom;
    function calculate($price, PriceCalculator $pricingStrategy){
        $grandPrice=$price;
        $grandPrice+=$pricingStrategy->applyDiscounts($price);
        $grandPrice+=$pricingStrategy->addTaxes($price);
        $grandPrice+=$pricingStrategy->convertCurrencies($price);
    }


}
