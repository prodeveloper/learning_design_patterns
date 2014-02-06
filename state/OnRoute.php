<?php


/**
 * Description of OnRoute
 *
 * @author jacob
 */
class OnRoute implements DeliveryState {
    public function getLocation() {
        return "On the train";
    }

    public function goNext(\Delivery $delivery) {
        return "Final destination";
    }

//put your code here
}
