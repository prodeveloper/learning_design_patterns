<?php
abstract class Sell{
      function removeFromInventory(){
     $this->inventory->remove($this);   
    }
    function retreivePayment(){
        $this->paymentProvider->retreive($this->price);
    }
}
