<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    $mysqli->set_charset('utf-8');

    $sql = "DELETE FROM students WHERE cId = ?";
    $stmt = $mysqli->prepare($sql);
    if($stmt){  
        $delID = 26;
        $stmt->bind_param('i', $delID);
        if($stmt->execute()){
            echo 'ok';
        }else{
            echo $mysqli->errno . '<br>';
            echo $mysqli->error;
        }    
    }else{
        echo 'Prepare Failure';
    }
?>