<?php

interface PaymentSource {
    function send();
    function approve();
}