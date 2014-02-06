<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Statistics {

    private $clientData;
    private $facade;
                function __construct() {
        $this->clientData = new ClientData();
        $this->facade= new ClientFacade();
    }

    function loadClientStats($clientId) {
        
        $allClientDataArray=  $this->facade->getAllClientData($cliendId);
        $this->clientData->id=$allClientDataArray[0];
        $this->clientData->address=$allClientDataArray[1];
        $this->clientData->mostPayedFor=$allClientDataArray[2];
        $this->clientData->userHistory=$allClientDataArray[3];
    }

}
