<?php
/**
 * 
 */
class User  {
	  private $paymentMethod;
      
      public function getPaymentMethod($value='')
      {
          //VISA or Paypal
          return $this->paymentMethod;
      }
}
