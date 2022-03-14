<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    $mysqli->set_charset('utf-8');

    $sql = "SELECT cName, ch, eng, math FROM students WHERE cID > ?";
    $stmt = $mysqli->prepare($sql);
    $cID = 10;
    $stmt->bind_param('i',$cID);
    $stmt->execute();//執行
    $stmt->store_result();//將結果儲存起來

    echo $stmt->num_rows . '<hr>';

    $stmt->bind_result($f1, $f2, $f3, $f4);
    while($stmt->fetch()){
        echo "{$f1} : {$f2} : {$f3} : {$f4} <br>";
        $class2_array[] = array("name"=>$f1, "ch"=>$f2, "eng"=>$f3, "math"=>$f4);   
    }
    print_r($class2_array);    
    

?>