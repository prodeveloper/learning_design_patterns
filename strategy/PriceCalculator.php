<?php

interface PriceCalculator{
    function applyDiscounts();
    function addTaxes();
    function convertCurrencies();
}
