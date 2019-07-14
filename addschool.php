<?php
include 'db.php';
session_start();
$sname=$_POST['sname'];
$saddress=$_POST['saddress'];
$sql = "INSERT INTO schools (sname,address) VALUES ('$sname','$saddress')";
if(mysqli_query($connection, $sql)){
    echo " ";
    header('Refresh:0; url=homeadmin.html');
         echo '<script language="javascript">';
        echo 'alert("successful insertion")';
        echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
?>