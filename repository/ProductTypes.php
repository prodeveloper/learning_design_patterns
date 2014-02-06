<?php
/**
 *
 */
class ProductTypes {
    private $factory;
    private $gateway;

    function __construct(TypesFactory $factory, TypesGateway $gateway) {
        $this -> factory = $factory;
        $this -> gateway = $gateway;
    }

    function findAll(){
        $allTypes=array();
        $allTypes=$this->gateway->retreiveAllTypes();
        return $this->makeAllForTypes($allTypes);
    }
    function makeAllForTypes(Array $allTypes){
        $types=array();
        foreach ($allTypes as $typeData) {
            $types[]=$this->factory->makeFrom($typeData);
        }
        return $types;
    }
    function findComputerHardware(){
        $all_type=$this->findAll();
        //Filter for hardware
    }
}
