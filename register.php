<?php
//include 'db.php'
session_start();
include 'db.php';
$uname=$_GET["name"];
$memail=$_GET["email"];
$password=$_GET["pass"];
$school_name=explode(",",$_GET["school"]);
//echo $school_name;
echo $_GET["school"];
$sql="INSERT into users(uname,school_id,email,role,password,flag) values ('$uname','$school_name[2]','$memail','1','$password','0')";
$result = mysqli_query($connection,$sql);
  		if($result){
  			//header("location:home.php");
  		}
  		else{
  			//$error="PLease upload proper details";
			//echo mysqli_error($connection);
			//echo "hii";
  		}
  		header("location:Login1.php");
   
?>
