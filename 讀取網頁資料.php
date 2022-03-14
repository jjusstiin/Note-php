<?php

    $fp = fopen('https://tw.stock.yahoo.com/quote/2330','r');
    while($line = fgets($fp)){
        echo $line . '<br>';
    }

?>