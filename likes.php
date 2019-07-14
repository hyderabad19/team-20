<?php
//include 'header.php';
include 'db1.php';
session_start();
$conn=new mysqli($url, $user, $password, $db);


//$uid=$_SESSION['uid'];

$data="select * from upload_data order by time DESC";

$did=$_GET['did'];

echo $did;
//echo "hii";

if(($data1=$conn->query($data))== false)
{
    echo $conn->error;
}

if($data1->num_rows)
{
    while($row=$data1->fetch_assoc())
    {
        $did=$row['did'];
        $likes1="select * from likes where did='$did'";
        $likes=$conn->query($likes1);
        $count=0;
        if($likes->num_rows)
        {
            while($likes_co=$likes->fetch_assoc())
            {
                $count=$likes_co['count'];
            }
        }

        else{
            $update="insert into likes(did,count) values(".$did.",1)";
        $likes123=$conn->query($update);
        if(!$likes123){
            echo $conn->error;
        }
    
}
        
        $update="update likes set count=".($count+1)." where did=".$did;
        $likes123=$conn->query($update);
        if(!$likes123){
            echo $conn->error;
        }
    }

}


header("Refresh:0 ,url=posts.php");
//header('Refresh:0; url=adminlogin.php');
?>