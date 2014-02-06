<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlPaymentDetails
 *
 * @author jacob
 */
class HtmlPaymentDetails extends PaymentDecorator{
    function getHtmlDescription() {
       $desc=$this->its_payment_method->getDescription();
       return "<html>{$desc}</html>";
    }
}
