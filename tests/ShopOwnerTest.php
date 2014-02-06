<?php
require_once '../abstract_server/includes.php';
class ShopOwnerTest extends PHPUnit_Framework_TestCase {

    function testOwnerCanSellRedRoses(){
        $redRose= new RedRose();
        $shopOwner= new ShopOwner($redRose);
        $shopOwner->sell();
        $this->assertTrue($redRose->isSold());
        
    }

}