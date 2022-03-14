<?php
    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];
    $zipcode = $_REQUEST['zipcode'];
    $gender = $_REQUEST['gender'];
    echo "{$account} : {$passwd}<br >";
    echo "{$zipcode}:{$gender}<br>"; 
?>
<hr>
<?php


    $habit = $_REQUEST['habit'];
    // var_dump($habit);
    foreach($habit as $v){
        echo "{$v}<br>";
    }

?>