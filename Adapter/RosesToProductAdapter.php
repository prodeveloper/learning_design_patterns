<?php
//Consider making this an abstract class
class RosesToProductAdapter implements ProductInterface {
    private $rose;
    function __construct(TheOldRoseInterface $rose) {
        $this->rose=$rose;
    }
    public function getDescription() {
        return "Nice flowers";
    }

    public function getPicture() {
        return $this->rose->showImage();
    }

    public function getPrice() {
        //Do any data manipulation needed
        return $this->rose->getPriceFromDatabase();
    }

    public function sell() {
        return $this->rose->sell();
    }

}