<?php

include 'db1.php';
session_start();

//$uid=$_SESSION['uid'];
$uid=$_SESSION['uid'];
$did=$_SESSION['did'];
print_r($_GET);
$conn=new mysqli($url, $user, $password, $db);

$comment=$_GET['comment'];
$time=date("H:i:s");
$sql = "INSERT INTO comments (did,uid,content,time) VALUES ('$did','$uid','$comment','$time')";

if(($sql1=$conn->query($sql))== false)
{
    echo $conn->error;
}
header("Refresh:0 ,url=posts.php");

?>