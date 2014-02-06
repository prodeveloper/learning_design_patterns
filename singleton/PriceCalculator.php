<?php
class PriceCalculator {

    function __construct() {
        
    }
    function compute(Product $product) {
        $price=$product->getPrice();
        $discountProvider=  DiscountProvider::getInstance();
        $discountAsPercent=$discountProvider->getDiscount($product->getId());
        $discountAsValue=$price* $discountAsPercent;
        return $price-$discountAsValue;
    }

}