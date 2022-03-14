<?php
    $ary = array(4 => 1, 2, 3, 9 => 4,5,6);
    var_dump($ary);

    echo '<hr />';

    for ($i = 4 ; $i <= 11 ; $i++){
        echo "{$i} : {$ary[$i]}<br />";
    }

    echo '<hr />';
    foreach($ary as $key => $value){
        echo "{$key} : {$value}<br />";
    }
?>
<hr />
<?php
    $person['name'] = 'Brad';
    $person['age'] = 18;
    $person['weight'] = 82;
    $person['height'] = 175;
    
    foreach($person as $a => $v){
        echo "{$a} : {$v}<br />";
    }

?>