<?php
    $rate = 0;
    if(isset($_GET['rate'])){
        $rate = $_GET['rate'];
    }
    //1.建立畫布(空白/exsit)
    $img = imagecreate(400, 24);
    // var_dump($img);

    //2.開始作畫
    $red = imagecolorallocate($img, 255, 0, 0);
    $yellow = imagecolorallocate($img, 255, 255, 0);
    imagefill($img, 0, 0, $red);
    imagefilledrectangle($img, 0, 0, 400*$rate/100, 24, $yellow);

    //3.輸出(網頁/檔案)
    header("content-type:image/jpeg");
    imagejpeg($img);

    //4.釋放記憶體
    imagedestroy($img);
?>
