<?php 

$command = escapeshellcmd('python time.py');
$output = shell_exec($command);
//echo $output;

header('location:analytics.html');
?>