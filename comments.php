<?php
session_start();
$uname=$_SESSION['uname'];
$query1=mysqli_query($connection,"select uid from users where uname='$uname'");
while ($row1 = mysqli_fetch_array($query1)) {

$uid=$row1['uid'];
}


$req=$_SESSION('content');
$sql = "INSERT INTO comments (uid,content,time) VALUES ($uid,$req,date("H:i:s"))";
if(mysqli_query($connection, $sql)){
    echo " ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
?>
