<?php

abstract class ProductSubject {

    private $observers = array();

    function __construct() {
        
    }

    function register(ProductObserver $observer) {
        $this->observers[] = $observer;
    }

    protected function notify() {
        foreach ($this->observers as $value) {
            $value->notify();
        }
    }

}
