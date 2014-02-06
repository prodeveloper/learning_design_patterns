<?php


/**
 *
 * @author jacob
 */
interface DeliveryState {
    function goNext(Delivery $delivery);
    function getLocation();
}
