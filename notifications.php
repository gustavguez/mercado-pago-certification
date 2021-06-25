<?php
$request_body = file_get_contents('php://input');
//Something to write to txt log
$log  = "(".date("Y-m-d H:i:s") . ") -> " . json_encode($_POST). ' - ' . $request_body .PHP_EOL;    
//Save string to log, use FILE_APPEND to append.
file_put_contents('notifications.log', $log, FILE_APPEND);