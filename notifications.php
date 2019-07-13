<?php
include 'db.php'
session_start();
$email=$_SESSION["email"];
$pass=$_SESSION["role"];
$sql="SELECT category,context FROM upload_data ORDER BY time DESC;"
$result = mysqli_query($db,$sql);
if(!$result){
  			$error="Unable to fetch or refresh notifications!";
  		}
  		
  		
   
?>