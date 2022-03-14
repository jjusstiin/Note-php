<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    // var_dump($mysqli);
    
    $mysqli->set_charset('utf-8');

    $sql = "INSERT INTO students(cName, cBirthday) Values (?,?)";
    $stmt = $mysqli->prepare($sql);

    $name = 'justin';
    $birthday = '1994-07-25';

    $stmt->bind_param('ss', $name, $birthday);
    if($stmt->execute()){
        echo 'ok';
    }else{
        echo $mysqli->errno . '<br>';
        echo $mysqli->error;
    }
?>