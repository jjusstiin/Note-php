<?php

    include 'bradutils.php';

    $myBike = new Bike;
    $urBike = new Bike;

    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();

    while($urBike->getSpeed() < 10){
        $urBike->upSpeed();
    }
    echo $myBike->getSpeed() . ':' . $urBike->getSpeed() . '<hr>';

?>