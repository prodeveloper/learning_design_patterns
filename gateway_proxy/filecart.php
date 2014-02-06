<?php
/**
 * 
 */
 
class FileCart implements CartGateway {
    private $fileId;
	
	function __construct() {
		$this->fileId=uniqid();
	}
    function persist(ShoppingCart $cart){
        file_put_contents($this->fileId, serialize($cart));
        
    }
    function retreive($id){
        return file_get_contents($this->fileId);
        
    }
    function getIdRecordedCart(){
        return $this->fileId;
    }
}
