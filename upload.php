<?php
include 'db1.php';
session_start();
$type=$_POST['type'];
$context=$_POST['context'];
$category=$_POST['category'];
$conn=new mysqli($url, $user, $password,$db);
$time=date("H:i:s");
if($type=='text'){
    
    $s="Insert into upload_data(type,context,category,context_url,time) values('$type','$context','$category','','$time')";

    if(($i4=$conn->query($s))== false)
    {
        echo $conn->error;
    }
}

if($type=='image'){

    echo "hii";

        echo "hii";
        $uploaddir = 'C:\\xampp\\htdocs\\team-20\\attachments\\';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) 
        {
        echo "File is valid, and was successfully uploaded.\n";
        } else 
        {
            echo "Upload failed";
        }

        $filename=$_FILES["image"]["name"];
        

        $s="Insert into upload_data(type,context,category,context_url,time) values('$type','$context','$category','$filename','$time')";

        if(($i4=$conn->query($s))== false)
        {
            echo $conn->error;
        }

    
}

if($type=='video'){

    extract($_POST);
    
    $target_dir = "C:\\xampp\\htdocs\\team-20\\attachments\\";
    
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $filename=$_FILES["image"]["name"];
    
    if(true)
    {
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
        if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
        {
            echo "File Format Not Suppoted";
        } 
        
        else
        {
        
        $video_path=$_FILES['image']['name'];
        
        if(!move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
            echo 'not uploaded';
        
        echo "uploaded ";
        
        }

         $s="Insert into upload_data(type,context,category,context_url,time) values('$type','$context','$category','$filename','$time')";

        if(($i4=$conn->query($s))== false)
        {
            echo $conn->error;
        }
    
    }
 
}

header("Refresh:0 url=homeadmin.html");
echo '<script language="javascript">';
        echo 'alert("upload sucessful")';
        echo '</script>';

?>;