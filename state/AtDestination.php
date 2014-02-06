<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtDestination
 *
 * @author jacob
 */
class AtDestination implements DeliveryState {
    public function getLocation() {
        return "At destination";
    }

    public function goNext(\Delivery $delivery) {
        return $this;
    }

//put your code here
}
