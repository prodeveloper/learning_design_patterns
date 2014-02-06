<?php

class OrderDelivery implements UserAddress {

    protected $deliveryAddress;
    public function setAddress($address) {
        $this->deliveryAddress=$address;
    }

}