<?php

class Notifier implements ProductObserver {
    private $product;
            function __construct(ProductSubject $subject) {
                $this->product=$subject;
    }
    public function update() {
        $newPrice=  $this->product->getPrice();
        //Do logic here
        return $newPrice;
    }

}