<?php
/**
 * 
 */
class ProcessPayment  {
	
	function processUserPayment($userName){
	    $user= new User($userName);
        $paymentMethod=$user->getPaymentMethod();
        $this->executePayment($paymentMethod);
	}
    private function executePayment(PaymentMethod $paymentMethod){
        try{
            $paymentMethod->execute();
        }
        catch(Exception $e){
            throw new PaymentProcessingException('paying with' . $paymentMethod . 'failed');
        }
    }
}
