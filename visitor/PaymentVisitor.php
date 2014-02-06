<?php

interface PaymentVisitor {
    function visit(PaymentMethod $p_method);
}