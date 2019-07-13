<?php
include 'dp.php';
$email=$_GET["Email1"];
$pass=$_GET["pass1"];
$a=0;
$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass' and role='$a'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);
      if($count == 0) {
         
         header("location: adminlogin.php");
      }else {
         header("location: home.php");
      }
   
?>