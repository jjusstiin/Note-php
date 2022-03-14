<?php
    $a[0] = array(1,2,3);
    $a[1] = array(4,5,6,7,8);
    $a[2] = 'Brad';

    foreach($a as $k => $v){
        echo "{$k}<br />";
        if (gettype($v) == 'array'){
            foreach($v as $kk => $vv ){
                echo "{$kk} : {$vv}<br />";
            }
            echo "<hr />";
        }else{
            echo $v;
        }
    }
    
?>