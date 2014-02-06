<?php
class DirectPaymentMethod extends PaymentMethod {

    public function approve() {
        return TRUE;
    }

    public function send() {
        parent::sendImp();
    }

}