<?php
include 'db.php';
session_start();
// $type=$_POST['type'];
// $context=$_POST['context'];
// $category=$_POST['category'];
$conn=new mysqli($url, $user, $password, $db);
$type='video';
$context='hiii';
$category='byeee';
$time=date("H:i:s");
if($type=='text'){
    $time=date("H:i:s");
    
    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
    $s="Insert into upload_data(type,context,category,context_url,time) values('$type','$context','$category','','$time')";

    if(($i4=$conn->query($s))== false)
    {
        echo $conn->error;
    }
}

if($type=='image'){

    if(isset($_POST["submit"]))
    {
        $uploaddir = 'C:\\xampp\\htdocs\\cfg_t20\\attachments\\';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        echo "<p>";
        echo $uploadfile;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) 
        {
        echo "File is valid, and was successfully uploaded.\n";
        } else 
        {
            echo "Upload failed";
        }

        echo "</p>";
        echo '<pre>';
        echo 'Here is some more debugging info:';
        print_r($_FILES);
        print "</pre>";

        $s="Insert into upload_data(type,context,category,context_url,time) values('$type','$context','$category','','$time')";


    }
}

if($type=='video'){

    extract($_POST);
    
    $target_dir = "C:\\xampp\\htdocs\\cfg_t20\\attachments\\";
    
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    
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
    
    }
 
}

?>