<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClientPersonalData {
    private $streetAddress;
    private $postalCode;
    private $country;
   function __construct($clientId) {
        
    }
    function getStreetAddress() {
        return $this->streetAddress;
    }
    function getPostalCode(){
        return $this->postalCode;
    }
    function getCountry(){
        return $this->country;
    }

}