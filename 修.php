<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    $mysqli->set_charset('utf-8');

    $sql = "UPDATE students SET ch = ?, eng = ?, math=? WHERE cID = ?";
    $stmt = $mysqli->prepare($sql);
    if($stmt){ 
        
        for($i = 11; $i <= 23; $i++ ){  
        $cID = $i;
        $ch = rand(50,100);
        $eng = rand(50,100);
        $math = rand(50,100);
        
        $stmt->bind_param('iiii', $ch, $eng, $math, $cID);
        if($stmt->execute()){
            echo 'ok';
        }else{
            echo $mysqli->errno . '<br>';
            echo $mysqli->error;
        }    
    }
    }else{
        echo 'Prepare Failure';
    }
?>