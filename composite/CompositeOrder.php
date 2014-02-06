<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author jacob
 */
class CompositeOrder implements Order {

    private $orders = array();

    function place() {
        foreach ($this->orders as $order) {
            $order->place();
        } 
    }

    function add(Order $order) {
        $this->orders[]=$order;
    }

}
