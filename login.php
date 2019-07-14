<?php
include 'dp.php';
session_start();
$email=$_GET["Email1"];
$pass=$_GET["pass1"];
$a=0;
$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass' and role='$a'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);
      if($count == 0) {
         header('Refresh:0; url=adminlogin.php');
         echo '<script language="javascript">';
        echo 'alert("incorrect credentials")';
        echo '</script>';

      }else {
      	$_SESSION['uid']=$row['uid'];
         header("location: charts.html");
      }
   
?>