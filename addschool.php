<?php
session_start();
$sid=$_SESSION['sid'];
$sname=$_SESSION['sname'];
$saddress=$_SESSION['saddress'];
$sql = "INSERT INTO schools (sid,sname,saddress) VALUES ($sid,$sname,$saddress)";
if(mysqli_query($link, $sql)){
    echo " ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>