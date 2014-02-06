<?php

class  UserDetails extends Observable{

    function changeAddress($address){
        $this->address=$address;
        $this->notify($address);
    }

}