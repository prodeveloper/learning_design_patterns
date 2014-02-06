<?php

class HardDisk extends ProductSubject {
    private $price;
    function setPrice($price) {
        $this->price=$price;
        $this->notify();
    }
    function getPrice($price) {
        return $this->price;
    }

}