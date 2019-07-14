<?php
session_start();
$uname=$_SESSION['uid'];
$query1=mysqli_query($connection,"select uid from users where uname='$uname'");
while ($row1 = mysqli_fetch_array($query1)) {

	$uid=$row1['uid'];
}
	
$req=$_SESSION('content');
$sql = "INSERT INTO requests (uid,content) VALUES ($uid,$req)";
if(mysqli_query($connection, $sql)){
    echo " ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
?>