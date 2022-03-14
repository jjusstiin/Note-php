<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Size</th>
        <th>Time</th>
    </tr>
<?php
    $dir = "./dir1/";
    $fp = @opendir($dir) or die('Server Busy');
    // var_dump($fp);
    while($fn = readdir($fp)){
        echo '<tr>';
        echo '<td>' . $dir . $fn .'</td>';
        echo '<td>'. filesize($dir . $fn) . '  bytes </td>';
        echo '<td>'. date("Y-m-d H:i:s", filemtime($dir . $fn)) . '</td>';//filemtime 時間戳記
        echo '</tr>';
    };
    
    closedir($fp);

?>
</table>