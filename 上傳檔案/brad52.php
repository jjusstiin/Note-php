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
?>