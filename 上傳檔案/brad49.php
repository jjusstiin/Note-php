<?php
   $upload = $_FILES['upload'];
    // var_dump($upload);
    // foreach($upload as $key => $v){
    //     echo "{$key} => {$v}<br>";
    // }

    if($upload['error'] == 0){
        if(move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
            echo "upload success";
        }else{
            //copy failure
        }
    }else{
        echo $upload['error'];
        //upload failure
    }

?>