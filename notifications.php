<?php
if(!empty($_POST)){
    //Something to write to txt log
    $log  = "NOTIFICATION (".date("Y-m-d H:i:s") . ") -> " . json_encode($_POST).PHP_EOL;    
    //Save string to log, use FILE_APPEND to append.
    file_put_contents('./notifications.log', $log, FILE_APPEND);
}