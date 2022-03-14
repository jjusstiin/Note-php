<?php

    //$_GET['name'] = 'Brad';
    foreach($_GET as $k => $v){
        echo "{$k} => {$v}<br />";
    }
    echo '<hr />';

    //echo gettype($_SERVER);
    foreach($_SERVER as $k => $v){
        echo "{$k} => {$v}<br />";
    }
    echo '<hr />';

    foreach($_ENV as $k => $v){
        echo "{$k} => {$v}<br />";
    }
    echo '<hr />';


?>