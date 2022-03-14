<?php

    $img = imagecreatefromjpeg('./dir1/coffee.jpg');

    $yellow = imagecolorallocate($img, 255, 255, 0);
    $letter = 
    
    imagefttext($img, 48, 0, 500, 500, $yellow, './dir1/font1.ttf', 'W');


    header("content-type:image/jpeg");
    imagejpeg($img);

    imagejpeg($img, './dir1/mycoffee.jpg');


    imagedestroy($img);

?>
