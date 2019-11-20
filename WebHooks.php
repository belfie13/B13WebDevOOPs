<?php

$webHooksLog = 'WebHooksLog.html';
if (file_exists($webHooksLog) !== true)
 {
    file_put_contents($webHooksLog, '');
    $log = '';
 }
else
 {
    $log = file_get_contents($webHooksLog);
 }

$log .= '<hr><datetime>'.time().'</datetime><br>';
$log .= highlight_source('<?php $logPOST = '.var_export($_POST, true), true);

file_put_contents($webHooksLog, $log);
