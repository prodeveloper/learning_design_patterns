<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaypalPayment
 *
 * @author jacob
 */
class PaypalPayment implements PaymentMethod{
    public function execute() {
        
    }

    public function getDescription() {
        return "Paypal payment";
    }
    function accept(PaymentVisitor $paymentVisitor) {
        $paymentVisitor->visit($this);
    }

//put your code here
}
