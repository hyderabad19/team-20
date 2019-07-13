<?php
session_start();
include 'dp.php';

$email=$_GET["Email"];
$pass=$_GET["pass"];
$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);
      if($count == 0) {
         
         header("location: Login1.php");
      }else {
         header("location: home.php");
      }
   
?>