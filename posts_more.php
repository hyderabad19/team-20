<?php

include "header.php";

include 'db1.php';
session_start();
$conn=new mysqli($url, $user, $password, $db);

$did=$_GET['did'];
$_SESSION['did']=$did;

$time=date("H:i:s");
$analy="Insert into analystics(did,time) values('$did','$time')";
if(($analy1=$conn->query($analy))== false)
{
    echo $conn->error;
}
//$uid=$_SESSION['uid'];

$data="select * from upload_data where did='$did'";

if(($data1=$conn->query($data))== false)
{
    echo $conn->error;
}

if($data1->num_rows)
{
    while($row=$data1->fetch_assoc())
    {

        echo '<div id="content-wrapper">
                <div class="container-fluid">';
        $did=$row['did'];
        $likes="select * from likes where did='$did'";
        echo ' 
                <div class="card" style="width: 100" >
                <div class="card-body">
                <b> <h3>'.$row['category'].'</h3></b><br>'.$row['context'].'<br>'.
                "";
        
        if($row['type']=='image'){
            
            echo '<img src="attachments\\'.$row['context_url'].' " height="200" width="200"><br><br>';
        }
        if($row['type']=='video'){
            echo '  <video width="300" height="200" autoplay loop controls>
                    <source src="attachments\\'.$row['context_url'].'" type="video/mp4">
                    </video><br><br> ';
        }
        $likes1=$conn->query($likes);
        if($likes1->num_rows){
            echo $likes1->num_rows;
            while($row_like=$likes1->fetch_assoc()){
                echo '<a href="likes.php?did='.$did.'">
                    <span><i class="far fa-heart"></i>'.$row_like['count'].'likes</span>
                </a>';
            }
            //echo "<a href='likes.php'>likes</a>".$row_like['count']."\t";
        }
        else{
             echo '<a href="likes.php?did='.$did.'">
                    <span><i class="far fa-heart"></i>0 likes</span>
                </a>';
        }
        $comments="select * from comments where did='$did'";
        echo' <a href="#">
                    <span><i class="fas fa-comment"></i>Comment</span>
                </a><br>
                ';
        $comments1=$conn->query($comments);
        if($comments1->num_rows)
        {
            while($com_row=$comments1->fetch_assoc())
            {
                echo $com_row['uid']."\t";
                echo $com_row['content']."\t";
                echo $com_row['time']."\t";
                echo "<br>";

            }
        }
        echo "<br>";
        echo "<br>";

        echo ' <hr> <form action="comment_submit.php" method="get">
                <input type="text" name="comment"><br><br>
                <input type="submit">
                </form> <hr>';
                
        echo "</div></div></div>"; 
    }
}


?>