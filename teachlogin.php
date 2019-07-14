<?php
session_start();
include 'dp.php';

$email=$_GET["Email"];
$pass=$_GET["pass"];
$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
$count = mysqli_num_rows($result);
if($count == 0) 
{
	header('Refresh:0; url=Login1.php');
	echo '<script language="javascript">';
	echo 'alert("incorrect credentials")';
	echo '</script>';
 
}else if($row['role']==1) {
	if($row['flag']==1){
		header('Refresh:0; url=Login1.php');
		echo '<script language="javascript">';
		echo 'alert("Request processing")';
		echo '</script>';
	}
	else
	{
		$_SESSION['uid']=$row['uid'];
 		header("location: posts.php");
	}
}

else{
	if($row['role']==0){
		$_SESSION['uid']=$row['uid'];
		header("location: homeadmin.html");
	}
}

?>