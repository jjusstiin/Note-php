<table border="1" width="100%">
<?php
    $fp = fopen('./dir1/maskdata.csv','r');
    // $d1 = fread($fp , 1); //讀指定數量字元
    // $d1 = fgetc($fp); //讀一單字
    // $d2 = fgets($fp); //一次讀一列
    while($line = fgets($fp)){
        $data = explode(',',$line);
        echo '<tr>';
            echo  "<td>{$data[1]}</td>";
            echo  "<td>{$data[2]}</td>";
            echo  "<td>{$data[4]}</td>";
            echo  "<td>{$data[5]}</td>";
        echo '</tr>';
    }; 
    
    fclose($fp);
?>
</table>