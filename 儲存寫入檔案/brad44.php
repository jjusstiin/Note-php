<?php
    if(!isset($_GET['filename'])) die('get out here');

    $filename=$_GET['filename'];
    $content = $_GET['content'];

    $fp = fopen("./dir1/{$filename}",'w');
    fwrite($fp, $content);
    fclose($fp);

    //輸出轉導向
    //前端介面寫到資料儲存
    //再重儲存的資料作寫入
    header("Location:./brad43.php");
?>