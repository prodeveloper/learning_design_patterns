<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentDecorator
 *
 * @author jacob
 */
abstract  class PaymentDecorator implements PaymentMethod{
    protected $its_payment_method;
    public function __construct(PaymentMethod $paymentMethod) {
        $this->its_payment_method=$paymentMethod;
    }
    public function execute() {
        
    }

    public function getDescription() {
        return $this->its_payment_method->getDescription();
    }

//put your code here
}
