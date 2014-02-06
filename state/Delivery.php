<?php

/**
 * Description of Delivery
 *
 * @author jacob
 */
class Delivery {
    private  $currentState;
    public function __construct(DeliveryState $state) {
        $this->setState($state);
    }
    function getCurrentLocation() {
        return $this->currentState->getLocation();
    }
    function goNext(Delivery $delivery) {
        $delivery->setState(new OnRoute());
    }
    function setState(DeliveryState $state) {
        $this->currentState= $state;
    }
}
