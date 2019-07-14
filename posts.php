
<?php
include "header.php";

include 'db1.php';
session_start();
$conn=new mysqli($url, $user, $password, $db);


//$uid=$_SESSION['uid'];

$data="select * from upload_data order by time DESC";

if(($data1=$conn->query($data))== false)
{
    echo $conn->error;
}

if($data1->num_rows)
{
    
    while($row=$data1->fetch_assoc())
    {
        $did=$row['did'];
        echo '<div id="content-wrapper">
                <div class="container-fluid">';
        $likes="select * from likes where did='$did'";

        echo ' 
                <div class="card" style="width: 100" >
                <div class="card-body">
                <b> <h3>'.$row['category'].'</h3></b><br>'.$row['context'].'<br>'.
                "<a href='"."posts_more.php?did=$did'>See More</a>"."<br>";
        $likes1=$conn->query($likes);
        if($likes1->num_rows){
            
            //echo $likes1->num_rows;
            while($row_like=$likes1->fetch_assoc()){
                echo '<a href="likes.php?did='.$did.'">
                    <span><i class="far fa-heart"></i>'.$row_like['count'].'likes</span>
                </a>';
            }
        }
        else{
            echo '<a href="likes.php?did='.$did.'">
                    <span><i class="far fa-heart"></i>0 likes</span>
                </a>';
        }

        $comments="select * from comments where did='$did'";
        //echo "<a href='posts_more.php?did=".$did."'>comment</a>"."<br>";
        echo' <a href="posts_more.php?did='.$did.'">
                    <span><i class="fas fa-comment"></i>Comment</span>
                </a><br>
                ';
        $comments1=$conn->query($comments);
        if($comments1->num_rows)
        {
            while($com_row=$comments1->fetch_assoc())
            {
                echo "<br><b> ".$com_row['uid']."\t"."</b>";
                echo $com_row['content']."\t";
                echo $com_row['time']."\t";
                echo "<br>";
            }
        }
        
       echo "</div></div></div>"; 
    }
    echo"";
    
    
}


include 'footer.php';
?>