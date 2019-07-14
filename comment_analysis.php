<?php 

$command = escapeshellcmd('python comments.py');
$output = shell_exec($command);
//echo $output;

header('location:analytics.html');
?>