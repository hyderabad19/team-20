<?php
error_reporting(0);
include 'db.php';
include "header.php";
include 'db1.php';
$conn=new mysqli($url, $user, $password, $db);
$query = $_POST['search']; 
# print_r($_POST);
# print_r($_GET);
    
     
    $min_length = 3;
    
    if(strlen($query) >= $min_length)
    { 
         
        $query = htmlspecialchars($query); 
        $flg=0;
        $query = mysqli_real_escape_string($connection,$query);
         
        $raw_results = mysqli_query($connection,"SELECT * FROM upload_data WHERE (`context` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')") ;
         
            
             
        while($row= mysqli_fetch_array($raw_results))
        {
            $flg=1;

       
            $did=$row['did'];
            echo '<div id="content-wrapper"><div class="container-fluid">';
            $likes="select * from likes where did='$did'";

            echo ' <div class="card" style="width: 100" ><div class="card-body"><b> <h3>'.$row['category'].'</h3></b><br>'.$row['context'].'<br>'.
                    "<a href='"."posts_more.php?did=$did'>See More</a>"."<br>";
            $likes1=$conn->query($likes);
            if($likes1->num_rows){
                
                while($row_like=$likes1->fetch_assoc())
                {
                    echo '<a href="likes.php?did='.$did.'"><span><i class="far fa-heart"></i>'.$row_like['count'].'likes</span></a>';
                }
            }
            else{
                echo '<a href="likes.php?did='.$did.'"><span><i class="far fa-heart"></i>0 likes</span></a>';
            }

            $comments="select * from comments where did='$did'";
            echo' <a href="posts_more.php?did='.$did.'"><span><i class="fas fa-comment"></i>Comment</span></a><br>';
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
        if($flg==0)
        { 
            echo "No results";
        }
         
    }
    else{ 
        header("Refresh:0 url:posts.php");
         echo '<script language="javascript">';
        echo 'alert("No results")';
        echo '</script>';
    }
    include 'footer.php';

?>

