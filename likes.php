<?php
include 'db.php'
session_start();
$email=$_SESSION["email"];
$pass=$_SESSION["role"];

$did1=$_POST['did'];
$query1=mysqli_query($connection,"select count from like where did='$did1'");
while ($row1 = mysqli_fetch_array($query1)) {

$count=$row1['count']+1;
}
//$sql="SELECT count from likes where did=$did1;"
$sql1="UPDATE likes SET count=$count where did=$did1; "
$result = mysqli_query($db,$sql);
$result1 = mysqli_query($db,$sql1);
if(!$result1){
  			$error="Unable to like or refresh likes!";
  		}
?>