<?php 

$command = escapeshellcmd('python likes.py');
$output = shell_exec($command);
//echo $output;

header('location:analytics.html');
?>