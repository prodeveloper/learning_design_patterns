<?php

class UserUpdater {

    function updateUserAddress($newAddress) {
        $user= new UserDetails();
        $user->changeAddress($newAddress);
    }
}

