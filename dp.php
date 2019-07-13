<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $connection=mysqli_connect("localhost","root","","");
if(!$connection)
{
    die("database connection failed".mysqli_error());
}
 $db_select=mysqli_select_db($connection,"cfg_t20");
 if(!$db_select)
 {
     die("database selection failed:");
 }
 ?>   
</body>
</html>
