<?php
	include 'db.php';
    $query = $_GET['query']; 
    //echo $query;
     
    $min_length = 3;
    
    if(strlen($query) >= $min_length)
    { 
        
        $query = htmlspecialchars($query); 
        $flg=0;
        //$query = mysql_real_escape_string($query);
         
        $raw_results = mysqli_query($connection,"SELECT * FROM upload_data
            WHERE (`context` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')") or die(mysqli_error($connection));
             
             
        while($results = mysqli_fetch_array($raw_results))
        {
            	$flg=1;
                echo "<p><h3>".$results['context']."</h3>".$results['category']."</p>";
        }
             
        
        if($flg==0)
        { 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
