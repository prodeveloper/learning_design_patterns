<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClientFacade {

    function getAllClientData($cliendId) {
        return array(
            $cliendId,
            $this->ClientAddress($cliendId),
            $this->getMostPayedFor($cliendId),
            $this->getPaymentHistory($cliendId)
        );
    }
    function ClientAddress($clientId){
        $clientShippingAddress='';
        $clientPersonalData= new ClientPersonalData($clientId);
        $clientShippingAddress.=$clientPersonalData->getStreetAddress();
        $clientShippingAddress.=$clientPersonalData->getPostalCode();
        return $clientShippingAddress;
        
    }
    function getMostPayedFor($clientId){
                $topPayments= new TopPayments();
        return $topPayments->findMaxForClientWithId($clientId);
    }
    function getPaymentHistory($clientId){
        $paymentHistory= new PaymentHistory();
        return $this->clientData->paymentHistory=$paymentHistory->findPaymentForClient($clientId);
    }
    

}