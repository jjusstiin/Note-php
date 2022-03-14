<?php
    // 陣列 Array => 電腦 => X空間觀念 => 資料放在記憶體 => 位址 => 線性觀念
    $a[] = 12;
    $a[] = 12.3;
    $a[] = 'Brad';
    $a[] = true;
    //echo gettype($a);
    var_dump($a);
?>
<hr />
<?php
    $b = array();
    var_dump($b);
?>
<hr />
<?php
    $c = array(1,2,3,123,'Brad');
    var_dump($c);
?>
<hr />
<?php
    $d[0] = 11;
    $d[2] = 22;
    $d[1000] = 'Brad';
    var_dump($d);
?>