<?php

class Mediator {

    private $observed;
    private $affected;

    function __construct(Observable $observedClass, UserAddress $affectedClass) {
        $this->observed= $observedClass;
        $this->affected=$affectedClass;
        $observedClass->register($this);
        
    }
    function update($address){
        $this->affected->setAddress($address);
        
    }

}
