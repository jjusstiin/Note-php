<?php
    function createFilename($filename, $index){
        $data = explode('.', $filename);
        if (count($data)>=2){
            $sname = '.' . $data[count($data)-1];
        }else{
            $sname = '';
        }
        
        // $ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);

        date_default_timezone_set('Asia/Taipei');
        $filename = date('Ymd_His') . $index . $sname;
        return $filename;
    }  

    $upload = $_FILES['upload'];
    // var_dump($upload);
    // foreach($upload as $k => $v){
    //     echo $k . '<br>';
    //     foreach($v as $i => $data){
    //         echo "{$i} => {$data}<br>";
    //     }
    //     echo '<hr>';
    // }

    $index = 0;
    foreach($upload['error'] as $i => $errCode){
        if($errCode == 0){
            move_uploaded_file($upload['tmp_name'][$i],
                './dir1/' . createFilename($upload['tmp_name'][$i], $index));
            $index++;
        }
    }

?>